<?php
include(__DIR__ . '/settings.php');

function print_records($records) {
  foreach ($records as $record) {
    // Pick out the header/display-name value.
    $display_name_value = $record['display_name'];

    // Print header.
    print("\n$display_name_value\n");
    print(str_repeat('-', strlen($display_name_value)) . "\n");

    // Then output all values prefixed with their field-name.
    foreach ($record as $key => $value) {
      if (is_array($value)) {
        $value = implode(', ', $value);
      }
      print("{$key}: $value\n");
    }
  }
}
