<?php
  
	$array = array();
    include "connect.php";
    $sql = "SELECT * FROM posts order by created desc";
    $res = mysqli_query($connect, $sql) or die (mysqli_error());
    $res->data_seek(0);
	while ($row = $res->fetch_assoc()) {
		$array[] = $row;
	}
    echo(json_encode($array));

 
?>