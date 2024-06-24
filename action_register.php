<?php
if (isset($_POST['stdCode'])  && !empty($_POST['stdCode']) && 
	isset($_POST['stdName']) && !empty($_POST['stdName']) && 
	isset($_POST['stdFamily']) && !empty($_POST['stdFamily']) &&
    isset($_POST['stdCity']) && !empty($_POST['stdCity']) &&
	isset($_POST['password']) && !empty($_POST['password'])&&
	isset($_POST['repassword']) && !empty($_POST['repassword'])
	) {

    $stdCode = $_POST['stdCode'];
    $stdName = $_POST['stdName'];
    $stdFamily = $_POST['stdFamily'];
    $stdCity = $_POST['stdCity'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $stdImage = basename($_FILES["stdImage"]["name"]);
} else
    exit("برخی از فیلد ها مقدار دهی نشده است");

$link = mysqli_connect("localhost", "root", "", "azmonep5");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

    if ($password != $repassword)
    exit("كلمه عبور و تكرار آن مشابه نيست");


    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["stdImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    
    
    $check = getimagesize($_FILES["stdImage"]["tmp_name"]);
    if ($check !== false) {
        echo "پرونده انتخابی یک تصویر از نوع - " . $check["mime"] . " است  <br />";
        $uploadOk = 1;
    } else {
        echo "پرونده انتخاب شده یک تصویر نیست  <br />";
        $uploadOk = 0;
    }
    
    
    if (file_exists($target_file)) {
        echo "پرونده ای با همین نام در سرویس دهنده میزبان وجود دارد  <br />";
        $uploadOk = 0;
    }
    
    if ($_FILES["stdImage"]["size"] > 500000) {
        echo "اندازه پرونده انتخابی بیشتر از 500 کیلوبایت است  <br />";
        $uploadOk = 0;
    }
    
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !=
        "jpeg" && $imageFileType != "gif") {
        echo "فقط پسوندهای JPG, JPEG, PNG & GIF برای پرونده مجاز هستند  <br />";
        $uploadOk = 0;
    }
    
    
$query = "INSERT INTO student (stdCode,stdName,stdFamily,stdCity,password,stdImage) VALUES ('$stdCode','$stdName','$stdFamily','$stdCity','$password','$stdImage')";

if (mysqli_query($link, $query) === true)
    echo ("<p style='color:green;'><b>" . $stdName .  $stdFamily.
        " گرامي عضویت شما" .
        " در سایت دانشگاه با موفقيت انجام شد " . "</b></p>");
else
    echo ("<p style='color:red;'><b>عضويت شما در سایت دانشگاه انجام نشد</b></p>");

mysqli_close($link);

?>
