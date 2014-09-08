<?php
	
	class Model_test extends CI_Model {
		var $id;
		var $testcol;
		function __construct(){
			parent::__construct();
		}
        public function getAll(){
        	// var_dump($this->db);exit;
            $query = $this->db->get("codetest");
            return $query->result();
        }
	}
?>