<?php

$env = file(__DIR__.'/../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($env as $value)
{
  $value = explode('=', $value);  
  define($value[0], $value[1]);
}

// Use this command to backup a complete database
$command = 'mysqldump -u '.DB_USERNAME.' -p\''.DB_PASSWORD.'\' '.BD_DATABASE;

// Use this command to backup a single table
$command = 'mysqldump -u '.DB_USERNAME.' -p\''.DB_PASSWORD.'\' '.BD_DATABASE.' table_name';

// Execute the backup command
exec( $command ." > /home/cvrx/public_html/test.sql", $array, $return );

// The $array and $return variables can be outputted to check for errors
// print_r( $return );
// print_r( $array );
