<?php
	class ExamsController extends AppController{

        public $uses = array('User', 'Exam', 'Course');

        public function index(){
        	
        }

        public function default_student(){
        	$this->set('courses', array('[Selecione]') + $this->Course->find('list'));

        }
    }
?>