<?php 

	if(isset($POST['gen']))
		{

		$xml = new DOMDocument();
	 
		$xml -> loadXML("<books> <book> <title> PHP </title> </book> <book> <title> JavaScript </title> </book> <book> <title> HTML5 </title> </book> </books>");
	 
		echo $xml -> save("Books1.xml");
		}

?>