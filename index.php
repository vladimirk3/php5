<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./script/jquery.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
    <title>Gallery</title>
</head>
<body>

<?php
include "config.php";

$sql_sorted = "SELECT * FROM images ORDER BY count desc";

//fetch data
$query = mysqli_query($link, $sql_sorted);

//print pic
while ($data = mysqli_fetch_assoc($query)) { ?>
    <a class='img_click' href='#' data-imglink='/img/big/<?=$data["path"]?>'>
    <img class='img' src='/img/small/<?=$data["path"]?>'>
    </a>
<?php
}
?>

<div class="win">
    <div class="frame">
        <button class="close_win">
            <svg viewBox="0 0 32 32"><path d="M10,10 L22,22 M22,10 L10,22"></path></svg>
        </button>
        <div class="img_win">
            <img class="pic" src="" alt="big">
        </div>
        <div>Количество просмотров: <span class="view"></span></div>
    </div>
</div>

</body>
</html>