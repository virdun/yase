<?php
require_once ('../../classes/Global.php');
require_once ('../../classes/Framework.php');

//$u = new UserManagement();
//$iUserId = $u->getUserId("pedant.dk");
//$i = new Indexer($iUserId);
//$i->reset();
$y =new Yase("pedant.dk");


$aFilterSkip=array();
array_push($aFilterSkip, "\/page\/");
array_push($aFilterSkip, "\/category\/");
array_push($aFilterSkip, "\/tag\/");
array_push($aFilterSkip, "wp-login");
$y->oIndexer->aFilterSkip=$aFilterSkip;

$y->oIndexer->addBodyFilter("|div class=\"entry-content\">(.*?)class=\"comments\"|is");

$y->index();

?>
