<?php
require_once ('../../classes/Global.php');
require_once ('../../classes/Yase.php');

$y = new Yase("kruse-net.dk");
$y->oCrawler->reset();
$aFilterSkip = array();

array_push( $aFilterSkip ,"\.js");
array_push( $aFilterSkip, "print");
array_push( $aFilterSkip, "\.pdf");
array_push( $aFilterSkip, "\.PDF");
array_push( $aFilterSkip, "\.ppt");
array_push( $aFilterSkip, "\.PPT");
array_push( $aFilterSkip, "\.jpeg");
array_push( $aFilterSkip, "\.JPEG");
array_push( $aFilterSkip, "\.jpg");
array_push( $aFilterSkip, "\.JPG");
array_push( $aFilterSkip, "\.gif");
array_push( $aFilterSkip, "\.GIF");
array_push( $aFilterSkip, "\.zip");
array_push( $aFilterSkip, "feed");
array_push( $aFilterSkip, "\.xml");
array_push( $aFilterSkip, "\.css");
array_push( $aFilterSkip, "\.CSS");
array_push( $aFilterSkip, "xmlrpc");
array_push( $aFilterSkip, "\#respond");
array_push( $aFilterSkip, "\#comment");
array_push( $aFilterSkip, "\.war");
array_push( $aFilterSkip , "audioselect");
array_push( $aFilterSkip, "antiselect");
array_push( $aFilterSkip, "jigsaw");
array_push( $aFilterSkip, "\/admin");
array_push( $aFilterSkip, "\/tracker");
array_push( $aFilterSkip, "\/dotproject");
array_push( $aFilterSkip, "\/magicdb");
array_push( $aFilterSkip, "\/gallery");
array_push( $aFilterSkip, "\/pics");
array_push( $aFilterSkip, "\/slides");
array_push( $aFilterSkip, "\/viewforum");
array_push( $aFilterSkip, "\/profile");
array_push( $aFilterSkip, "\/search\.php");
array_push( $aFilterSkip, "\/saelges");

$y->oCrawler->aFilterSkip = $aFilterSkip;
$y->crawl();

?>
