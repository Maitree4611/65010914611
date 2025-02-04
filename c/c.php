<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง (เฟิร์ส)t</title>


<body>
<h1>ไมตรี อินทะเเสง (เฟิร์ส) </h1>
<h1>กรอกใบสมัคร </h1>

<form method="post" action="">
	
    
ตัวเลข <input type="number" name="a"  min="0" max="100" required autofocus>
<br>
ชื่อ-นามสกุล <input type="text" name="b" required>
<br>
	เพศ  
    <input type="radio"name="title" value="ชาย"checked>ชาย
    <input type="radio"name="title" value="หญิง">หญิง
    <input type="radio"name="title" value="อื่นๆ">อื่นๆ
    
<br>
    
    จังหวัด
    <select name="m">
    	<option value="ขอนแก่น">ขอนแก่น</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
     </select>
<br>
     วันเดือนปีเกิด <input type="date" name="date">
<br>
     ระดับการศึกษา
    <select name="province">
    	<option value="ตำ่ากว่าปริญญาตรี">ตำ่ากว่าปริญญาตรี</option>
        <option value="ปริญญาตรี">ปริญญาตรี</option>
        <option value="ปริญญาโท">ปริญญาโท</option>
        <option value="ปริญญาเอก">ปริญญาเอก</option>
     </select>
<br>
   	 เบอร์โทร <input type="text" name="p" required >
     <br>

     ที่อยู่
	<textarea name="c" cols="29" rows="4" required> </textarea>
<br>
อาหารที่ชอบ 
                <input type="checkbox" name="f" value="ข้าวหมูทอด" >ข้าวหมูทอด 
     			<input type="checkbox" name="f" value="ข้าวขาหมู">ข้าวขาหมู
                <input type="checkbox" name="f" value="ข้าวกะเพราหมู">ข้าวกะเพราหมู
<br>
     Username <input type="text" name="g" required>
<br>
     Password <input type="password" name="h" min="8" required>
<br>

    <button type="submit" name="Submit">Ok</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>
<?php
echo "ตัวเลข: ".@$_POST		['a']."<br>";
echo "ชื่อ-นามสกุล: ".@$_POST	['b']."<br>";
echo "จังหวัด: ".@$_POST		['c']."<br>";
echo "เพศ: ".@$_POST		['title']."<br>";
echo "ระดับการศึกษา: ".@$_POST	['province']."<br>";
echo "วันเดือนปีเกิด: ".@$_POST	['date']."<br>";
echo "ที่อยู่: ".@$_POST			['m']."<br>";
echo "เบอร์โทร: ".@$_POST			['p']."<br>";
echo "อาหารที่ชอบ: ".@$_POST			['f']."<br>";
echo "Username: ".@$_POST	['g']."<br>";
echo "Password: ".@$_POST	['h']."<br>";
?>


<body>
</body>
</html>