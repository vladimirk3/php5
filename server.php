<?php
include "config.php";

$path = $_POST['path'];
$sql_count_plus = "UPDATE images SET count=count+1 where path='".$path."'";
$query = mysqli_query($link, $sql_count_plus);

$sql_count = "SELECT count FROM images where path='".$path."'";
$query1 = mysqli_query($link, $sql_count);

$arr = [];
while ($row = mysqli_fetch_assoc($query1)) {
    $arr [] = $row;
}

echo json_encode ($arr);