<html>
<head>

</head>
<body bgcolor="yellow">
<center><b>
<h1> <center> YOUR PROFILE IS: </center><center>
<br><br>
<?php
 
    $searchfor = $_REQUEST['Sl_no'];

    global $matches,$sre,$found,$indexs,$patter, $searchfor,$buffer,$fp;
    $pattern=array();

        $file=fopen("hts.txt","r");
        $indexs=fopen("cde.txt","w+");
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
        $fp=fopen("cde.txt","r");
		while(!feof($file))
		{
			$line=fgets($file);
			$pat=explode('|',$line);
	        if($pat[0]== $searchfor)
{
            
             $found=1;
            $file=fopen("cde.txt","r") or die("unable to open file");
             fseek($file,$pat[1]);
            $line=fgets($file);
            $pattern=explode('|',$line);
 
                      echo nl2br  ("Sl_no:: $pattern[0]\n");
                      echo nl2br  ("                          \n         ");
                      echo nl2br  ("USN:: $pattern[1]\n");
                     echo nl2br  ("                          \n         ");
                     echo nl2br  ("Name:: $pattern[2]\n");
                     echo nl2br  ("                          \n         ");
          

            }
        }
      
if($found==0)
{
   
    echo("  DATA  NOT FOUND ");
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


<form>
<p><a href="NKN.HTML">back:  </a></p>
</form>

<form>
<p><a href="wlcome page.html">logout: </a></p>
</form> 



