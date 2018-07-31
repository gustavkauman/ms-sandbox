<?php

# Load all relevant documents
use Ripcord\Ripcord;
require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/common.php');
include(__DIR__ . '/class.php');
/*
# Query information
$model = 'member.profile';
$function = 'search_read';

# Search terms
# This MUST be an array

$search_terms = array(
    ['display_name', 'like', 'Gustav Utke Kauman'],
    ['state', '=', 'active']
);

# Fields wanted
# This MUST be an array

$fields = array(
    'display_name',
    'member_number',
    'state'
);

# Get information from MS
$limit = 100; $offset = 0;

$search = search($model, $function, $search_terms, $fields, $limit, $offset, $settings);

# Print out information to terminal
$display_name = 'display_name';
print_records($search);
*/
# This will allow for an array of searches to be made at the same time.

$searches = array(
    array(
        'name' => 'search1',
        'model' => 'member.profile',
        'function' => 'search_read',
        'search_terms' => array(
            ['display_name', 'like', 'Gustav Utke Kauman'],
            ['state', '=', 'active']
        ),
        'fields' => array(
            'display_name',
            'member_number'
        ),
        'limit' => 100,
        'offset' => 0
    ),
    array(
        'name' => 'search2',
        'model' => 'member.profile',
        'function' => 'search_read',
        'search_terms' => array(
            ['display_name', 'like', 'Sigrid Valentin'],
            ['state', '=', 'active']
        ),
        'fields' => array(
            'display_name',
            'member_number'
        ),
        'limit' => 100,
        'offset' => 0
    ),
    array(
        'name' => 'search3',
        'model' => 'event.registration',
        'function' => 'search_read',
        'search_terms' => array(
            ['display_name', 'like', 'Gustav Utke'],
            ['event_id', '=', '12391']
        ),
        'fields' => array(
            'display_name',
            'member_number',
            'create_date'
        ),
        'limit' => 100,
        'offset' => 0
    )
);

foreach ($searches as $search) {

    $name = $search['name'];
    $model = $search['model'];
    $function = $search['function'];
    $search_terms = $search['search_terms'];
    $fields = $search['fields'];
    $limit = $search['limit'];
    $offset = $search['offset'];

    $s = search($model, $function, $search_terms, $fields, $limit, $offset, $settings);
    print("\n" . str_repeat('=', (strlen($name) + 10)) . "\n");
    print("==== $name ====\n");
    print(str_repeat('=', (strlen($name) + 10)) . "\n");
    print_records($s);

}
