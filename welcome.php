<?php

session_start();

	
if ((isset($_POST['stdCode']) && !empty($_POST['stdCode']) && isset($_POST['password']) &&
    !empty($_POST['password']))) {

    $stdCode = $_POST['stdCode']; 
    $password = $_POST['password'];  
} else
    exit("برخی از فیلد ها مقدار دهی نشده است");


$link = mysqli_connect("localhost", "root", "", "azmonep5"); 

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());


$query = "SELECT * FROM student WHERE stdCode='$stdCode' AND password='$password'";
$result = mysqli_query($link, $query);  

$row = mysqli_fetch_array($result);   

if ($row) {
    $_SESSION["state_login"] = true;
    $_SESSION["stdCode"] = $row['stdCode'];
    $_SESSION["password"] = $row['password'];


    echo ("<p style='color:green;'><b>{$row['stdName']} به سایت دانشگاه خوش آمديد</b></p>");
} else

    echo ("<p style='color:red;'><b>نام كاربري يا كلمه عبور يافت نشد</b></p>");


mysqli_close($link);  

?>