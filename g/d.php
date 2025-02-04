<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง(เฟิร์ส)</title>
</head>
<h1> ไมตรี อินทะเเสง(เฟิร์ส)  </h1>
<body>

<form method="post" action="">
    จำนวน <input type="number" min="1" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form>

<?php
	if (isset($_POST["Submit"])) {
		$c = $_POST['a'];
		echo "เเสดงจำนวน $c รูป <br>";
		for ($i= 1; $i<=$c; $i++){
?>
		

		<img src="https://i.pinimg.com/736x/66/c5/96/66c596c704c365d1080b9d56c777e6a7.jpg" width="231">

<?php } // end if 

   }
   
   ?>
</body>
</html>