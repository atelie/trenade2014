<?php
	class ExamsController extends AppController{

        public $uses = array('User', 'Exam', 'Course', 'AltQuestion', 'TextQuestion');

        public function index(){
            
        }

        public function result(){
            
        }

        public function correction(){

            if ($this->request->is('post')) {
                //Pega os ids de questões
                $questions = array();
                for ($id=1;$id<=15;$id++) {
                    $questions[$id] = $this->request->data['Exam'][$id];
                }
                //Pega as respostas do usuário
                $answeredAlt = array();
                for ($i=1;$i<=14;$i++) {
                    $answeredAlt[$i] = $this->request->data['Exam'][$questions[$i]];
                }
                //Pega as respostas corretas do banco
                $answers_list = array();
                for($i=1;$i<=14;$i++){
                    $answers_list[$i] = $this->AltQuestion->find('first', array(
                    'fields' => array('answer_id'),
                    'conditions' => array('AltQuestion.id' => $questions[$i])
                    ));
                }

                $score = 0;
                for ($i=1;$i<=14;$i++) {
                    if($answers_list[$i]['AltQuestion']['answer_id'] == $answeredAlt[$i]){
                        $score++;
                    }          
                }
                echo $score;
                echo '<br>'.$dis = $this->request->data['Exam']['answer_text'];

                
            }
        }

        public function generate(){
            $this->set('courses', array('[SELECIONE O CURSO]') + $this->Course->find('list'));
        }

        public function exam() {

            if ($this->request->is('post')) { 

                $id_busca = $this->request->data['Exams']['course_id'];

                if ($id_busca == '0') {
                    $this->Session->setFlash(__('<script> alert("Selecione o curso!"); </script>',true));
                    $this->redirect(array('action' => 'generate'));
                } else {
                    $course = $this->Course->find('first', 
                    array( 'conditions' => array('Course.id' => $id_busca)));
                    $course_name = $course['Course']['name'];
                    $this->set('nome_curso', $course_name);

                    $this->set('conhecimentos_gerais', $this->AltQuestion->find('all', array(
                    'fields' => array('DISTINCT id','question_text','answerA','answerB','answerC','answerD','answerE', 'answer_id'),
                    'conditions' => array('AltQuestion.category_id' => '1'), 
                    'order' => 'rand()',
                    'limit' => 4
                    )));

                    $this->set('alternativas', $this->AltQuestion->find('all', array(
                    'fields' => array('DISTINCT id','question_text','answerA','answerB','answerC','answerD','answerE', 'answer_id'),
                    'conditions' => array('AltQuestion.course_id' => $id_busca), 
                    'order' => 'rand()',
                    'limit' => 10
                    )));

                    $this->set('dissertativa', $this->TextQuestion->find('all', array(
                    'fields' => array('DISTINCT id','question_text','answer_text'),
                    'conditions' => array('TextQuestion.course_id' => $id_busca), 
                    'order' => 'rand()',
                    'limit' => 1
                    )));
                }

            }else {
                $this->redirect(array('action' => 'generate'));
            }

        } 

    }
