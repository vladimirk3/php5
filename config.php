<?php
const SERVER = "localhost";
const DB = "php5";
const LOGIN = "root";
const PASSWORD = "";

$link = mysqli_connect(SERVER, LOGIN, PASSWORD, DB);
if (mysqli_connect_errno()) {
    die("Connect failed: ".mysqli_connect_error());
}