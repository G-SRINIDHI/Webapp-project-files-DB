<?php
global $pattern,$found,$c_Sl_no,$c_USN;
$c_Sl_no=$_REQUEST['Sl_no'];

$line=file('cde.txt');
$handle = fopen("cde.txt", "r") or die("Unable to open file!");
$del="$$";

while(! feof($handle))
{   
 $cre=fgets($handle);
    $pattern = explode("|",$cre);
        if($pattern[0]==$c_Sl_no)
        {   
            $lines=$pattern[0];   
            
            $str=file_get_contents('cde.txt');
            $str=str_replace("$lines","$del",$str);
            file_put_contents('cde.txt',$str);
            //break;
            echo("<br></br><br></br><center><b>data is deleted</b></center>");
            $found=1;



        }
       
}   
if($found==0)
{
    echo("<b><br><br><center>enter correct  sl_no <center></br></br></b>");

}


?>



<form>
<p><a href="view2.php">Click here to view deleted data </a></p>
</form>
