<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง (เฟิร์ส)</title>
</head>

<body>
<h1>ไมตรี อินทะเเสง (เฟิร์ส) </h1>

<form method="post" action="">
    ตัวเลข <input type="number" name="a"  min="0" max="100" required autofocus><br>
    ชื่อ-นามสกุล <input type="text" name="b" required>
    <br>
    จังหวัด
    <select name="province">
    	<option value="ขอนนแก่น">ขอนแก่น</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
     </select><br>
     วันเดือนปีเกิด <input type="date" name="date">
     <br>
    <button type="submit" name="Submit">Ok</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>

<?php
echo @$_POST['a']."<br>";
echo @$_POST['b']."<br>";
echo @$_POST['province']."<br>";
echo @$_POST['date']."<br>";
?>


</body>
</html>