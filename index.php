<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الشكاوى والاقتراحات</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>


<?php
if(!empty($_POST["send"])) {
    $UserName = $_POST["$UserName"];
    $Phon = $_POST["$Phon"];
    $Branch = $_POST["$Branch"];
    $Date = $_POST["$Date"];
    $cars = $_POST["$cars"];
    $message = $_POST["$message"];
    $toEmail = $_POST["abm31804@gmail.com"];

    $mailHeaders = "الاسم:" . $UserName .
    "\r\n الرقم:" $Phon .
    "\r\n الفرع:" $Branch . 
    "\r\n التاريخ:" $Date .
    "\r\n الشكوى او الافتراح عن:" $cars .
    "\r\n تفاصيل الشكوى او الاقتراح:" $message . "\r\n";
    // if(mail($toEmail, $UserName, $mailHeaders)) {
        // $message = "تم ارسال رسالك بنجاح.";
    // }
}
?>
<section class="main-content">
        <form method="post" name="emailContact">
            <div class="form-group">
                <label><em>*</em> الأسم</label>
                <input type="text" name="UserName" placeholder="أدخل اسمك الكامل" required>
            </div>
            <div class="form-group">
                <label><em>*</em> رقم الجوال</label>
                <input type="number" name="Phon" placeholder="أدخل رقم الجوال" required>
            </div>
            <div class="form-group">
                <label name="Branch">الفرع</label>
                <!-- <input type="text" "branch" name="branch" placeholder="فرع النزهة - فرع الحمداينة"> -->
                <select name="cars">
                    <option value="alnzha">فرع النزهة</option>
                    <option value="hmda">فرع الحمدانية</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">التاريخ</label>
                <input type="date" name="Date" style="cursor: pointer;">
            </div>
            <div class="form-group">
                <label for="subject">موضوع الشكوى او اقتراحك</label>
                <!-- <input type="text" "subject" name="subject" placeholder="أدخل موضوع شكواك أو اقتراحك"> -->
                <select name="cars">
                    <option value="reception">الاستقبال</option>
                    <option value="place">نظافة المكان</option>
                    <option value="food">جودة الطعام</option>
                    <option value="serves">جودة الخدمة</option>
                </select>
            </div>
            <div class="mess">
                <label for="mes">الرسالة</label>
                <textarea id="message" name="message" rows="5" placeholder="أكتب شكواك أو اقتراحك بالتفصيل"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="send">إرسال</button>
            </div>
        </form>
    </section>
</body>
</html>