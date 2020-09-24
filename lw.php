<?php


$Sl_no=$_POST['Sl_no'];
$USN=$_POST['USN'];
$NAME=$_POST['NAME'];
$T1=$_POST['T1'];
$T2=$_POST['T2'];
$T3=$_POST['T3'];
$data=$Sl_no.",".$USN.",".$NAME.",".$T1.",".$T2.",".$T3;



$file="file2.csv";
file_put_contents($file,$data.PHP_EOL,FILE_APPEND);

echo"<center><h1>DATA  ENTERED SUCCESSFULLY!!!!!!!!!!</h1></center>";
?>


<html>
<head>
<body bgcolor="yellow">
<br><br>
<a href="file2.csv">Click here to view: </a><br><br>
<a href="crview.php">Back: </a><br><br>
<a href="wlcome page.html">Logout: </a>
     
</html>
</head>
</body>