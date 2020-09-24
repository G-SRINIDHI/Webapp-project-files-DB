<html>
<head>
</head>
<body>
<?php
	function input()
	 {
		
		global $buffer, $c_Sl_no, $c_USN,$c_IA1,$c_IA2,$c_IA3,$found;
		$c_Sl_no = $_REQUEST['Sl_no'];
	 	$c_USN= $_REQUEST['USN'];
	 	$c_IA1= $_REQUEST['IA1'];
	 	$c_IA2 = $_REQUEST['IA2'];
                                      $c_IA3= $_REQUEST['IA3'];



	 	
	 	
	}

	input();

	function packs()
	{
		global  $buffer,$c_Sl_no, $c_USN, $c_IA1,$c_IA2,$c_IA3,$found;
		$buffer=$c_Sl_no."|".$c_USN."|".$c_IA1."|".$c_IA2."|".$c_IA3."|"."#".PHP_EOL;
	}
	packs();

	$handle=fopen("cde.txt","r");
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
	 	$fp=fopen("cde.txt","a");
	 	fwrite($fp,$buffer);
	 	fclose($fp);
	 	header("Location: view2.php");
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