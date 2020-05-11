<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>a</title>

</head>
<body>


<?php

//require_once 'simple_html_dom.php';

function main() {

	/* Ping送信プログラム */
	function ping($host)
	{
		//$r = exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), 
		//$r = exec(sprintf('ping -n 1 %s', escapeshellarg($host)), 
		$r = exec(sprintf('ping -c 1 %s', escapeshellarg($host)), 
		$res, $rval);
		//pingの結果を表示
		//print_r($r);
		return $rval === 0;
	}
	/* $hostに死活監視をしたいIPやドメインを指定します */
	$host = 'awww.yahoo.co.jp';
	$up = ping($host);
	echo $up ? '正常稼働中' : '応答なし';


}

main();
?>

</body>
</html>