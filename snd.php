<?PHP
$messag = $_POST["button"];
if($messag!=''){
	mail('adewumi_tosin@hotmail.com','Comments sent','Details:'. $messag,'From:adviseme@efathaonline.net');
	print json_encode('T');
} else {
	//do nothing
	print json_encode('D');
}
?>