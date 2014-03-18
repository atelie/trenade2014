<?php
	class ExamsController extends AppController{

        public $uses = array('User', 'Exam', 'Course', 'AltQuestion', 'TextQuestion');

        public function index(){
            $this->set('courses', array('[Selecione]') + $this->Course->find('list'));
        }

        public function exam() {
            if ($this->request->is('post')) {
                
                $id_busca = $this->request->data['Exams']['course_id'];
                
                $course = $this->Course->find('first', 
                    array( 'conditions' => array('Course.id' => $id_busca)));
                $course_name = $course['Course']['name'];
                $this->set('nome_curso', $course_name);

                

                $this->set('random_questions', $this->AltQuestion->find('all', array(
                'fields' => array('DISTINCT AltQuestion.id'),
                'conditions' => array('AltQuestion.course_id' => $id_busca), 
                'order' => 'rand()',
                'limit' => 15
                )));

            }else {
                $this->redirect(array('action' => 'index'));
            }

        }  

     
       
    }
