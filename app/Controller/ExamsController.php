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

                $this->Course->find('first', 
                array( 'conditions' => array('Course.id' => $id_busca) ));

                $nome_curso = $this->request->data['Courses']['name'];

                debug($nome_curso);
            }else {
                $this->redirect(array('action' => 'default_student'));
            }

        }  

     
       
    }
