<?php

    use Ripcord\Ripcord;
    require(__DIR__ . '/../vendor/autoload.php');

class Search {

    public $model;
    public $function;
    public $search_terms;
    public $fields;
    public $limit;
    public $offset;

    public function __construct() {
        $arguments = func_get_args();

        if (!empty($arguments)) {
            foreach($arguments[0] as $key => $property) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $property;
                }
            }
        }

        $this->limit = 100;
        $this->offset = 0;
    }
/*
    public $models = ripcord::client($settings['endpoint_object']);
    public $result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
    $model, $function,
    $search_terms,
    array(
        'fields' => $fields,
        'limit' => $limit,
        'offset' => $offset
        )
    );
*/
}

function search($model, $function, $search_terms, $fields, $limit, $offset, $settings) {

    $models = ripcord::client($settings['endpoint_object']);
    $result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
    $model, $function,
    array($search_terms),
    array(
        'fields' => $fields,
        'limit' => $limit,
        'offset' => $offset
        )
    );

    return $result;
}
