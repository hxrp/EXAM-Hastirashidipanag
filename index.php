
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت دانشگاه</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">صفحه اصلی</a></li>
                <li><a href="#majors">رشته‌ها</a></li>
                <li><a href="#signup">ثبت‌نام</a></li>
                <li><a href="#login">ورود به سایت</a></li>
                <li><a href="#about">درباره ما</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>به سایت دانشگاه خوش آمدید</h1>
    </section>

    <section id="majors">
        <h2>رشته‌ها</h2>
        <!-- Content about majors -->
    </section>

    <section id="signup">
        <h2>فرم ثبت‌نام</h2>
        <form action="action_register.php" method="POST" enctype="multipart/form-data">
            <label for="stdCode">کد دانش‌آموزی:</label>
            <input type="text" id="stdCode" name="stdCode" required>
            
            <label for="stdName">نام:</label>
            <input type="text" id="stdName" name="stdName" required>
            
            <label for="stdFamily">نام خانوادگی:</label>
            <input type="text" id="stdFamily" name="stdFamily" required>
            
            <label for="stdCity">محل تولد:</label>
            <select id="stdCity" name="stdCity" required>
                <option value="tehran">تهران</option>
                <option value="mashhad">مشهد</option>
                <option value="isfahan">اصفهان</option>
                <option value="shiraz">شیراز</option>
                <option value="tabriz">تبریز</option>
            </select>
            
            <label for="password">کلمه عبور:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="repassword">تکرار کلمه عبور:</label>
            <input type="password" id="repassword" name="repassword" required>
            
            <label for="stdImage">عکس:</label>
            <input type="file" id="stdImage" name="stdImage" required>

            <button type="submit">تأیید</button>
            <button type="reset">انصراف</button>
        </form>
    </section>

    <section id="login">
        <h2>ورود به سایت</h2>
        <form action="welcome.php" method="POST">
            <label for="stdCode">کد دانش‌آموزی:</label>
            <input type="text" id="stdCode" name="stdCode" required>
            
            <label for="password">کلمه عبور:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">ورود</button>
        </form>
    </section>

    <section id="about">
        <h2>درباره ما</h2>
        <!-- Content about the website -->
    </section>
</body>
</html>
