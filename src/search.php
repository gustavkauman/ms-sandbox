<?php

# Load all relevant documents
use Ripcord\Ripcord;
require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/common.php');
include(__DIR__ . '/class.php');

# Query information
$model = 'member.profile';
$function = 'search_read';

# Search terms
# This MUST be an array

$search_terms = array(
    ['display_name', 'like', 'Gustav Utke']
);

# Fields wanted
# This MUST be an array

$fields = array(
    'display_name',
    'member_number'
);

# Get information from MS

/*
$models = ripcord::client($settings['endpoint_object']);
$result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
    $model, $function,
    array($search),
    array(
        'fields' => array(
            'display_name',
            'member_number'
        ),
        'limit' => 100,
        'offset' => 0,
    )
);
*/

$args = array(
    'model' => $model,
    'function' => $function,
    'search_terms' => $search_terms,
    'fields' => $fields
);

$search = new Search($args);

# Print out information to terminal
$res = $search->result;
print_records($res);
