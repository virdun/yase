<?php
 require_once('UserManagement.php'); 
 require_once('Indexer.php');
 require_once('Crawler.php');
 require_once('Searcher.php');
 require_once('HTTPClient.php');

class Yase{ 
 
 protected $iCustomerId; 
 protected $sAction;
 protected $sName;
 protected $sPassword;

 public $oUserManagement;
 public $oIndexer;
 public $oCrawler;
 public $oSearcher;

 public function __construct($sUser){
   
   $this->oUserManagement = new UserManagement();
   $iCustomerId = $this->oUserManagement->getUserId($sUser);
   $this->iCustomerId    = $iCustomerId;
   
   $this->oIndexer       = new Indexer($iCustomerId);
   $this->oCrawler       = new Crawler($iCustomerId); 
   $this->oSearcher      = new Searcher($iCustomerId); 
   
   $this->getParameters();
 }

 public function getParameters(){
   if(isset($_REQUEST['name'])) {
     $this->sName         =$_REQUEST['name'];
   }		
   if(isset($_REQUEST['password'])){
     $this->sPassword     =$_REQUEST['password'];
   } 
   if(isset($_REQUEST['action'])) {
     $this->sAction       =$_REQUEST['action'];
   }
   if(isset($_REQUEST['query'])) {
     $this->sQuery        =$_REQUEST['query']; 
   }
 }

 public function crawl(){
   $domains = $this->oUserManagement->getDomains($this->iCustomerId);
   
   print "START CRAWL:http://".$domains[0]."\r\n"; 
   $this->oCrawler->crawler("http://".$domains[0], 0, "http://pedant.dk".$domains[0]);
 }

 public function index(){
   $this->oIndexer->index();
 }

 public function search($sQuery){
   $this->oSearcher->search($sQuery);
 } 
};
?>


