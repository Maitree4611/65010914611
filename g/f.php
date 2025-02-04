<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง(เฟิร์ส)</title>
</head>
<h1> ไมตรี อินทะเเสง(เฟิร์ส) while </h1>
<body>

	<form method="post" action="">
    สูตรคุณ <input type="number" min="2" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form>
	
    <?php
	if (isset($_POST["Submit"])) {
		$m = $_POST['a'];
		echo "สูตรคุณเเม่ $m  <br>";
		$i= 1;
		while ($i<=12) {
		$x = $m * $i;
?>
		<?=$m;?> x <?=$i;?> = <?=$x;?> <br>


<?php $i++;
} // end if 

   }
    
   ?>



<body>
</body>
</html>