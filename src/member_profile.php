<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/common.php');

$search = array(
  ['display_name', 'like', 'Gustav Utke Kauman']
);

$models = ripcord::client($settings['endpoint_object']);
$result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
  'member.profile', 'search_read',
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

print_records($result);
