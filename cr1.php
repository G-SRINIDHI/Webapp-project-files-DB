 <html>
<head>
<body>
<h2> <center></center></h2>
<body bgcolor="yellow" >
<?php
 
 
global $matches,$cre,$found;
$pattern=array();
$handle = fopen("abcc.txt", "r") or die("Unable to open file!");

echo"<h1><center>MARKS LIST ENTRY FORM</center></h1>";
echo "<table style=width:100% border: 1px solid black>";
echo "<b><tr><td>"  . "Semster:" . "</td><td>". "sub_code:" . "</td><td>" . "Subject_name:" ."</b></td>"; 

while(! feof($handle))
 {   
     $cre=fgets($handle);
     $pattern = explode("|",$cre);
     

     if(($pattern[0]!=NULL))
     {

echo "<b><tr><td>" . "$pattern[0]". "</td><td>" . "$pattern[1]" . "</td><td>". "$pattern[2]" .  " </b></td>"; 		
   
        $found=1;
   }

}
    echo "</table>";

?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<html>
<head>
<body>
<h2><CENTER> STUDENTS LIST </h2>
<body bgcolor="yellow" >
<html>
<head>
<body>


<body bgcolor="yellow">
<FORM METHOD="POST" ACTION="lw.php">
<h1><center>MARKS LIST  (For faculty use only)</h1>
<h2>Form details:</h2>
<TABLE BORDER="1">
<TR>
 <TR>
    <TD> Semster: </TD>
    <TD>
      <INPUT TYPE="NUMBER" NAME="T1" SIZE="20">
    </TD>
  </TR>

    <TD>Sub_code :</TD>
    <TD><INPUT TYPE="NUMBER" NAME="T2" SIZE="20"></TD>
  </TR>
<TR>
    <TD>Subject name :</TD>
    <TD><INPUT TYPE="NUMBER" NAME="T3" SIZE="20"></TD>
  </TR>


  </TR>
  </TR>

<?php
 
 
global $matches,$cre,$found,$T1,$T2,$T3;
$pattern=array();
$handle = fopen("hts.txt", "r") or die("Unable to open file!");


echo "<table style=width:100% border: 1px solid black>";
echo "<b><tr><td>" . "Sl_no:". "</td><td>" . "USN:" . "</td><td>". "Name:"."</td><td>"."T1:"."</td><td>"."T2:"."</td><td>"."T3:"."</b></td>"; 
//echo "<b><tr><td>"."</b></td>"; 
while(! feof($handle))
 {   
     $cre=fgets($handle);
     $pattern = explode("|",$cre);
     

     if(is_numeric($pattern[0]))
     {
//$T1=$_POST['T1'];
//$T2=$_POST['T2'];
//$T3=$_POST['T3'];

echo "<b><tr><td>" . "$pattern[0]". "</td><td>" . "$pattern[1]" . "</td><td>". "$pattern[2]" . "</td><td>".   '<input type="NUMBER " name="T1" > '  . "</td><td>". '<input type="NUMBER" name="T2" >'. "</td><td>".  ' <input type="NUMBER" name="T3">  '.  "</b></td>"; 		
   }

}
    echo "</table>";
//if($pattern[0]!=0)
{
echo '<form method="post" action=" lw.php"><P><center><INPUT TYPE="SUBMIT" VALUE="Submit" ></center></P>
</FORM> ';
}
?>




</body>
</html>

<html>
<head>
<body>
<!--<form method="post" action" "> -->
<!--<P><center><INPUT TYPE="SUBMIT" VALUE="Submit" ></center></P>-->
</FORM>
</html>
</head>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
