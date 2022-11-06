<?php

function escape_data( $data)
{
// $data = mysqli_real_escape_string($conn, $data);
  $data = trim($data);
  $data = addslashes($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}
