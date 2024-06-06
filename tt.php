<? 
// 	Last Session Request Lite
// 	https://github.com/tayfuntoprakcioglu/Last-Session-Request-Lite
// 	Indicate the definitions you want to save from the bottom.. ( $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_PORT'] ... )
// 	Do not forget to change the recording address (record.tt). You can create an address, preferably with complex numbers, special characters, numbers.
// 	WARNING: Please send a notification to your users during use! Depending on where you live, this Last Session Request Lite may be prohibited by law. Be careful before use!

$fp = fopen("record.tt", "a");
fputs($fp, " IP: " . $_SERVER['REMOTE_ADDR'] . "  -  PORT: " . $_SERVER['REMOTE_PORT'] . "  -  DATE: " . date("d.m.Y H:i:s") . "  -  REFERRER: " . $_SERVER['REQUEST_URI'] . "\n BROWSER: " . $_SERVER['HTTP_USER_AGENT'] . "\n\n");
fclose($fp);
?>