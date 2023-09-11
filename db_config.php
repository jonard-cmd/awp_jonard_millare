<?php
$db_connect = mysqli_connect('localhost', 'root', '', 'db_school');

if (!$db_connect) {
  echo "connection failed";
} else {
  echo "";
}