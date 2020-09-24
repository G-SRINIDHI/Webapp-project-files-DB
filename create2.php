<html>
<head>
</head>
<body>
<?php
	function input()
	 {
		
		global $buffer, $c_Sl_no, $c_USN,$c_Name,$found;
		$c_Sl_no = $_REQUEST['Sl_no'];
	 	$c_USN= $_REQUEST['USN'];
	 	$c_Name= $_REQUEST['Name'];
	 	

	 	
	 	
	}

	input();

	function packs()
	{
		global  $buffer,$c_Sl_no, $c_USN, $c_Name,$found;
		$buffer=$c_Sl_no."|".$c_USN."|".$c_Name."|"."#".PHP_EOL;
	}
	packs();

	$handle=fopen("hts.txt","r");
	while(! feof($handle))
	{
			$cre=fgets($handle);
     		                 $pattern = explode("|",$cre);
	 		if($pattern[0]==$c_Sl_no)
	 		{
		 		$found=1;
	 		}	
	}
	if($found==0)
	{
		function write() {
		global $buffer;
	 	$fp=fopen("hts.txt","a");
	 	fwrite($fp,$buffer);
	 	fclose($fp);
	 	header("Location: new view.php");
	}
	 write();
	}
	else
	{
		
		header("Location: .html");
	}

?>
</body>
</html>