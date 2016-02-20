<?php

$db_host     = getenv('DB_HOST');
$db_user     = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name     = getenv('DB_NAME');

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

/* check if server is alive */
if ($mysqli->ping()) {
  printf ("Our connection is ok!\n");
} else {
  printf ("Error: %s\n", $mysqli->error);
}

/* close connection */
$mysqli->close();
