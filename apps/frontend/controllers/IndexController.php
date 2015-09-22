<?php

namespace Myproject\Frontend\Controllers;
use Phalcon\Mvc\Model\Query;
//use Myproject\Frontend\Models\Posts;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    	//$post = \Myproject\Frontend\Models\Posts::findFirstByid(1);
    	//$posts = Posts::find(); 
    	$post = Posts::findFirstByid(1);
		print_r($post);exit;
    }
}

