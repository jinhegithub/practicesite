<?php
  $conn = new mysqli('localhost', 'root', '', 'chat');
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM gmap WHERE id='$_POST[areadata]'";
  $result=$conn->query($sql);
  $row = $result->fetch_array();
  //echo $row['imgpath'];
  echo json_encode($row);

?>
