<?php
	function parsePageSignedRequest() {
		if (isset($_REQUEST['signed_request'])) {
		  $encoded_sig = null;
		  $payload = null;
		  list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
		  $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
		  $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
		  return $data;
		}
		return false;
	};

	if($signed_request = parsePageSignedRequest()) {
		if($signed_request->page->liked) {
	  echo "
	  <script language='javascript' type='text/javascript'>
	  window.location.href = 'streaming.php';
	</script>
	  ";
	} else {
		 echo "
	  <script language='javascript' type='text/javascript'>
	  window.location.href = 'index.php';
	</script>
	  ";
	}
}

?>

<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" <![endif]-->
<!--[if gt IE 8]><html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
	<meta http-equiv="PRAGMA" content="NO-CACHE">
	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/libs/selectivizr-min.js"></script>
	<![endif]--> 
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode/.com/svn/trunk/html5.js"></script>
		<script>window.html5 || document.write('<script src="js/libs/html5.js"><\/script>')</script>
	<![endif]-->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="style.css" />
	<title>Debate na Band</title>
</head>
<body>
	<div id="fb-root"></div>		