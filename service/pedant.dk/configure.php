<?php
 require_once('../../classes/Global.php'); 
 require_once('../../classes/HTTPClient.php'); 
 require_once('../../classes/Search/Framework.php');

 //mysql_query("INSERT INTO user(login,password,level_limit,crawl_limit) values('pedant_dk', 'test', 200, 10000)");

 //setup
 $s=new Yas();
 $s->login("pedant_dk", "test");
 $s->setup();
 
 $s->addDomain("www.pedant.dk");
 $s->addCrawlSkip("feed"); 
 $s->addCrawlSkip("xmlrpc");
 $s->addCrawlSkip("print");
 $s->addCrawlSkip("respond"); 
 $s->addCrawlSkip("comment"); 
 $s->addCrawlSkip("css");
 $s->addCrawlSkip("bmp");
 $s->addCrawlSkip("jpg");
 $s->addCrawlSkip("zip");
 $s->addCrawlSkip("xml"); 
 

 //add the following index skips for pedant.dk
 $s->setIndexDomain("pedant.dk"); 
 $s->addIndexSkip("page");
 $s->addIndexSkip("tag");
 $s->addIndexSkip("xml");  
 $s->addIndexSkip("category");
 $s->setIndexBodyFilter("|<div\sclass=\'content[^\']*?'(.*?)<div\sclass=\"postmeta|is");

?>