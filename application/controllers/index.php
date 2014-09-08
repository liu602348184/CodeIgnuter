<?php
    class Index extends TMIS_Controller {
    	function __construct(){
    		parent::__construct();
            header('Content-Type:text/html;charset=utf-8');
    	}
    	
    	function test(){
    		// $this->load->model("Model_test");
            
            // var_dump($this->Model_test->getAll());
            // $arr = $this->Model_test->getAll();
            // echo $arr[0]->id;exit;
    		// $this->assign("title","heee");
    		// $this->assign("content",$arr);
    		// $this->display("index.tpl");
    		// var_dump(get_instance());exit;
    		// echo "test";
    	}
    }
?>