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
    $UserPhon = $_POST["$UserPhon"];
    $Branch = $_POST["$Branch"];
    $Date = $_POST["$Date"];
    $subj = $_POST["$subj"];
    $message = $_POST["$message"];
    $toEmail = $_POST["abm31804@gmail.com"];

    $mailHeaders = "الاسم:" . $UserName .
    "\r\n الرقم:" $UserPhon .
    "\r\n الفرع:" $Branch . 
    "\r\n التاريخ:" $Date .
    "\r\n الشكوى او الافتراح عن:" $cars .
    "\r\n تفاصيل الشكوى او الاقتراح:" $message . "\r\n";
   
    if(mail($toEmail, $UserName, $mailHeaders)) {
        $message = "تم ارسال رسالك بنجاح.";
    }
}
?>
 <div class="section">
        <form method="post" name="emailContact">
            <div class="from-group">
                <label for=""><em>*</em> الأسم</label>
                <input type="text" name="UserName" placeholder="أدخل اسمك الكامل" required>
            </div>
            <div class="from-group">
                <label for=""><em>*</em> الرقم</label>
                <input type="tel" name="UserPhon" placeholder=" رقمك المسجل في الفاتورة" required>
            </div>
            <div class="from-group">
                <label for="">الفرع</label>
                <select name="Branch">
                    <option value="alnzha">فرع النزهة</option>
                    <option value="hmda">فرع الحمدانية</option>
                </select>            </div>
            <div class="from-group">
                <label for="">التاريخ</label>
                <input type="date" name="Date" style="cursor: pointer;">
            </div>
            <div class="from-group">
                <label for="">موضوع الشكوى او اقتراحك</label>
                <select name="subj">
                    <option value="reception">الاستقبال</option>
                    <option value="place">نظافة المكان</option>
                    <option value="food">جودة الطعام</option>
                    <option value="serves">جودة الخدمة</option>
                </select>
            </div>
            <div class="from-group">
                <label for="">الرسالة</label>
                <textarea id="message" name="message" rows="5" placeholder="أكتب شكواك أو اقتراحك بالتفصيل"></textarea>
            </div>
            <div class="from-group">
                <input type="submit" name="send" value="إرسال"style=" background: #881e06; color: white; font-size: 14 px; cursor: pointer;">
                <?php if (! empty($message)) {?>
                <div class="dan">
                    <strong><?php echo $message; ?>	</strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>
