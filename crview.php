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
<html>
<head>
<body>


<body bgcolor="yellow">
<FORM METHOD="POST" ACTION="lw.php">
<h1><center>DATA ENTRY  FORM  (For faculty use only)</h1>
<h2>Form details:</h2>
<TABLE BORDER="1">
<TR>
 <TR>
    <TD> Sl_no: </TD>
    <TD>
      <INPUT TYPE="NUMBER" NAME="Sl_no" SIZE="20">
    </TD>
  </TR>

    <TD>USN :</TD>
    <TD><INPUT TYPE="TEXT" NAME="USN" SIZE="25"></TD>
  </TR>
<TR>
    <TD>NAME:</TD>
    <TD><INPUT TYPE="TEXT" NAME="NAME"></TD>
  </TR>


<TR>
    <TD>T1:</TD>
    <TD><INPUT TYPE="number" NAME="T1"></TD>
  </TR>
<TR>
    <TD>T2:</TD>
    <TD><INPUT TYPE="number" NAME="T2"></TD>
  </TR>
<TR>
    <TD>T3:</TD>
    <TD><INPUT TYPE="number" NAME="T3"></TD>
  </TR>




</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" ></P>
</FORM>
</html>
</head>
</body>