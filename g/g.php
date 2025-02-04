<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง(เฟิร์ส)</title>
</head>
<h1> ไมตรี อินทะเเสง(เฟิร์ส) while </h1>
<body>

<form method="post" action="">
    รหัสนิสิต <input type="text"  name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form><hr>

<?php
    if (isset($_POST['Submit'])) {
        $std = $_POST['a'];
        $y = substr ($std,0,2);
        echo "<img src='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width='300'>" ;
    }
    
?>
<body>
</body>
</html>