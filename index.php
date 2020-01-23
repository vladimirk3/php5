<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
    <title>Gallery</title>
</head>
<body>

<?php
include "config.php";
include "server.php";
$id = "";
$sql_fetch = "SELECT * FROM images";
$sql_sorted = "SELECT * FROM images ORDER BY count asc";



//fetch data
$query = mysqli_query($link, $sql_fetch);
//$array = mysqli_fetch_assoc($query);

//print pic
while ($data = mysqli_fetch_assoc($query)) { ?>
    <a class='img_click' href='#' data-imglink='/img/big/<?=$data["path"]?>'>
    <img class='img' src='/img/small/<?=$data["path"]?>'>
    </a>
<?php
}
//test
$query = mysqli_query($link, $sql_fetch);
$path = "01.jpg";
$sql_count = "SELECT * FROM images where path='$path'";
$query1 = mysqli_query($link, $sql_count);
$data_query = mysqli_fetch_assoc($query1);
print_r($data_query["count"])
?>

<div class="win">
    <div class="frame">
        <button class="close_win">
            <svg viewBox="0 0 32 32"><path d="M10,10 L22,22 M22,10 L10,22"></path></svg>
        </button>
        <div class="img_win">
            <img class="pic" src="" alt="big">
        </div>
        <div>количество просмотров: <span .class="view"><?=print_r($data_query["count"])?></span></div>
    </div>
</div>

</body>
</html>
<?=$data_query["count"]?>