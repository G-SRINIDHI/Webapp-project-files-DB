<html>
<head></head>
<style>
  table,th,td {
        border: 1px solid black;
	border-collapse:collapse;
        width:20%;
      }  
 th,td {
           text-align:left;
          padding: 8px;
   }
 th   {
	background-color:green;
	color:white;
      }
</style>
<body bgcolor="lightblue">
<?php
global $pattern,$cname,$found;
$Sl_no=$_REQUEST['Sl_no'];
$pattern=array();
$handle = fopen("hts.txt", "r") or die("Unable to open file!");

while(! feof($handle))
 {   
     $raj=fgets($handle);
     $pattern = explode("|",$raj);
      
     if($pattern[0]==$Sl_no)
      {
		echo "<table style=width:100% border: 1px solid black>";
		echo "<b><tr><td>" . "Sl_no". "</td><td>" . "USN" . "</td><td>". "Name" . "</td><tr></b>";
		echo"<center><br><br><b><font color=black font-size:40px>CUSTOMER FOUND</FONT></b><br><br></center>";	
		echo "<tr><td>" . $pattern[0]  . "</td><td>" . $pattern[1]."</td><td>". $pattern[2].  "</td><tr>"; 
        
       
            $found=1;
     }
    }
if($found!==1)
{
    echo"<center><br><br><b><font color=black font-size:40px>CUSTOMER NOT FOUND</FONT></b><br><br></center>";	
}
echo "</table>";
?>  
<br>
<br>
<div align="center">
<a href="nkn.html"><font size="3"><font color="red" align="center">BACK</font></a><br><br>
<div>
</body>
</html>