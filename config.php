<?php
//Connection to MySQL
$con = mysqli_connect('localhost', 'root', '');

if(!$con) {
    die('Not Connected To Server');
}

//Connection to database
if(!mysqli_select_db($con, 'intership')) {
    echo 'Database Not Selected';
}