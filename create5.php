<html>
<head>
</head>
<body>
<?php
	function input()
	 {
		
		global $buffer, $c_Faculty_name, $c_Semster,$c_sub_code,$c_Subject_name,$found;
		// $c_Faculty_name = $_REQUEST['Faculty_name'];
	 	$c_Semster = $_REQUEST['Semster'];
	 	$c_sub_code = $_REQUEST['sub_code'];
	 	$c_Subject_name = $_REQUEST['Subject_name'];
	 	
	 	
	}

	input();

	function packs()
	{
		global  $buffer,$c_Faculty_name, $c_Semster, $c_sub_code,$c_Subject_name,$found;
		$buffer=$c_Semster."|".$c_sub_code."|".$c_Subject_name."|"."#".PHP_EOL;
	}
	packs();

	$handle=fopen("abcc.txt","r");
	while(! feof($handle))
	{
			$cre=fgets($handle);
     		$pattern = explode("|",$cre);
	 		if($pattern[0]==$c_Semster)
	 		{
		 		$found=1;
	 		}	
	}
	if($found==0)
	{
		function write() {
		global $buffer;
	 	$fp=fopen("abcc.txt","a");
	 	fwrite($fp,$buffer);
	 	fclose($fp);
	 	header("Location: crview.php");
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