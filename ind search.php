<html>
<head>

</head>
<body><center><b>
<h2> </h2>
<?php
 
    $searchfor = $_REQUEST['Sl_no'];
    global $matches,$sre,$found,$indexs,$patter, $searchfor,$buffer,$fp,$address;
    $pattern=array();

        $file=fopen("cde.txt","r");
        $indexs=fopen("index.txt","w+");
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
        
        
        $file=fopen("index.txt","r");
        $fp=fopen("cde.txt","r");
		while(!feof($file))
		{
			$line=fgets($file);
			$pat=explode('|',$line);
	        if($pat[0]== $searchfor)
			{
                echo ("$pat[0]\n");
               
            $found=1;
            $file=fopen("cde.txt","r") or die("unable to open file");
            fseek($file,$pat[1]);
            $line=fgets($file);
            $pattern=explode('|',$line);
            echo nl2br  ("Sl_no:: $pattern[0]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("USN:: $pattern[1]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("IA1:: $pattern[2]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("IA2:: $pattern[3]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("IA3:: $pattern[4]\n");
            echo nl2br  ("                          \n         ");
            
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
</body>
</html>



</body>
</html>