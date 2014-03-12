<?php
	class ExamsController extends AppController{

        public $uses = array('User', 'Exam', 'Course');

        public function index(){
        	
        }

        public function default_student(){

        	$this->set('courses', array('[Selecione]') + $this->Course->find('list'));

        }

        public function exam() {

            if ($this->request->is('post')) {

               $id_busca = $this->request->data['Exams']['course_id'];

                $nome_curso = $this->Course->find('list');

                debug($nome_curso);

                }else {

                $this->redirect(array('action' => 'default_student'));

            }

        }  

     
       
    }
