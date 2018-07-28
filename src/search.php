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
    ['display_name', 'like', 'Gustav Utke Kauman']
);

# Fields wanted
# This MUST be an array

$fields = array(
    'display_name',
    'member_number'
);

# Get information from MS
$limit = 100; $offset = 0;

$search = search($model, $function, $search_terms, $fields, $limit, $offset, $settings);

# Print out information to terminal
$display_name = 'display_name';
print_records($search, $display_name);
