<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง(เฟิร์ส)</title>
</head>
<h1> ไมตรี อินทะเเสง(เฟิร์ส) for </h1>


<body>

	<form method="post" action="">
    สูตรคุณ <input type="number" min="2" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form>
	
        <?php
	if (isset($_POST["Submit"])) {
		$m = $_POST['a'];
		echo "สูตรคุณเเม่ $m  <br>";
		for ($i= 1; $i<=12; $i++){
			$x = $m * $i;
?>
		<?=$m;?> x <?=$i;?> = <?=$x;?> <br>


<?php } // end if 

   }
   
   ?>

</body>
</html>