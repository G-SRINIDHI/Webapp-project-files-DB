<html>
<head>

</head>
<body><center><b>
<h2> YOUR ACCOUNT:</h2>
<?php
 
    $searchfor = $_REQUEST['Sl_no'];
    global $matches,$sre,$found,$indexs,$patter, $searchfor,$buffer,$fp;
    $pattern=array();

        $file=fopen("hts.txt","r");
        $indexs=fopen("lwa.txt","w+");
        while(!feof($file))
        {
          if($file)
           {
                    $address=ftell($file);
                    $line=fgets($file);
                    $patter=explode('|',$line);
                    $var1=$patter[0];
            }
           
            $buffer=$var1."|".$address."|"."#".PHP_EOL;
            fwrite($indexs,$buffer);
        }
        //$buffer=$var1."|".$address."#".PHP_EOL;
        
        $file=fopen("hts.txt","r");
        $fp=fopen("lwa.txt","r");
		while(!feof($file))
		{
			$line=fgets($file);
			$pat=explode('|',$line);
	        if($pat[0]== $searchfor)
			{
                echo ("$pat[0]\n");
                //echo("$pat[1]\n");
            $found=1;
            $file=fopen("lwa.txt","r") or die("unable to open file");
            fseek($file,$pat[1]);
            $line=fgets($file);
            $pattern=explode('|',$line);
            echo nl2br  ("Sl_no :: $pattern[0]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("USN:: $pattern[1]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("Name:: $pattern[2]\n");
            echo nl2br  ("                          \n         ");
         //   echo nl2br  ("SAVINGS :: $pattern[3]\n");
          //  echo nl2br  ("                          \n         ");
           // echo nl2br  ("BANK-NAME:: $pattern[4]\n");
            //echo nl2br  ("                          \n         ");
           // echo nl2br  ("BANK-ID:: $pattern[5]\n");
           // echo nl2br  ("                          \n         ");
           // echo nl2br  ("BANK-BRANCH :: $pattern[6]\n");
           // echo nl2br  ("                          \n         ");
            //echo nl2br  ("PHONE-NO:: $pattern[8]\n");
            //echo nl2br  ("                          \n         ");
            
			}
        }
      
if($found==0)
{
   
    echo(" Not found");
}
//else
//{
    	
  //  echo("  founnd");
    //$data = fgets($fp, $pat[1]);
//} 


?>
</b>
</center>






<style>
button {
      background-color: #2ba1e8;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 20%;
	  height:40px;
  }
  .btn:hover {
  opacity: 1;
}
</style>

<div class="header">
<center><a href="nkn.html"><button type="submit" value="back"><b>BACK</b></button></center>
</head>


</body>
</html>