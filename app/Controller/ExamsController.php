<?php
	class ExamsController extends AppController{

        public $uses = array('User', 'Exam', 'Course');

        public function index(){
            $this->set('courses', array('[Selecione]') + $this->Course->find('list'));
        }

        public function exam() {
            if ($this->request->is('post')) {
                $id_busca = $this->request->data['Exams']['course_id'];
                $course = $this->Course->find('first', 
                    array( 'conditions' => array('Course.id' => $id_busca)));
                $course_name = $course['Course']['name'];
            }else {
                $this->redirect(array('action' => 'index'));
            }

        }  

     
       
    }
