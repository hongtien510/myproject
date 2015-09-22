<?php

namespace Myproject\Frontend\Controllers;
use Phalcon\Mvc\Model\Query;
use Myproject\Frontend\Models\Posts;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    	//$post = \Myproject\Frontend\Models\Posts::findFirstByPostId(1);
    	//$post = \Myproject\Frontend\Models\Posts::find(); 
    	$post = Posts::findFirstByPostId(1);
		print_r($post->toArray());exit;
    }
}

