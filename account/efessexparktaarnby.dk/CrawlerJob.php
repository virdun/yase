<?php
require_once ('../../classes/Global.php');
require_once ('../../classes/Framework.php');


$y=new Yase("efessexparktaarnby.dk");
$aFilterSkip = array();
array_push( $aFilterSkip, "print");
//array_push( $aFilterSkip, "\.pdf");
array_push( $aFilterSkip, "\.ppt");
array_push( $aFilterSkip, "\.jpeg");
array_push( $aFilterSkip, "\.jpg");
array_push( $aFilterSkip, "\.gif");
array_push( $aFilterSkip, "\.png");
array_push( $aFilterSkip, "\.zip");
array_push( $aFilterSkip, "feed");
array_push( $aFilterSkip, "\.css");
array_push( $aFilterSkip, "\.xml");
array_push( $aFilterSkip, "xmlrpc");
array_push( $aFilterSkip, "\#respond");
array_push( $aFilterSkip, "\#comment");
array_push( $aFilterSkip, "\.war");
array_push( $aFilterSkip, "slideshow");
array_push( $aFilterSkip, "login");
array_push( $aFilterSkip , "mailform");
array_push( $aFilterSkip , "\/albums\/");

$y->oCrawler->aFilterSkip = $aFilterSkip;
$y->oCrawler->reset();
$y->oCrawler->crawler("http://efessexparktaarnby.dk", 0, "http://efessexparktaarnby.dk");
?>
