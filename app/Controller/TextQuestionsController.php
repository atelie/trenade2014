<?php
App::uses('AppController', 'Controller');

class TextQuestionsController extends AppController {

	public $uses = array('User', 'TextQuestion');

	public function index() {
		$this->TextQuestion->recursive = 0;
		$this->set('textQuestions', $this->paginate());

		$users = $this->TextQuestion->find('all', 
                array(
                    'conditions' => array(
                        'TextQuestion.user_id' => $this->Auth->user('id'),
                        ),
                    'order' => array('TextQuestion.id asc')
                    ));
            
		$this->set(compact(array('users')));
	}

	public function view($id = null) {
		if (!$this->TextQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid text question'));
		}
		$options = array('conditions' => array('TextQuestion.' . $this->TextQuestion->primaryKey => $id));
		$this->set('textQuestion', $this->TextQuestion->find('first', $options));
	}

	public function add() {
		$this->set('categories', array('[Selecione]') + $this->TextQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->TextQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->TextQuestion->Course->find('list'));

		if ($this->request->is('post')) {
			$this->request->data['TextQuestion']['user_id'] = $this->Auth->user('id');
			if ($this->TextQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('<script> alert("Questão adicionada com sucesso!"); </script>', true));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('<script> alert("Não pode ser salvo"); </script>', true));
				$this->redirect(array('action' => 'add'));
			}
		}
		
	}

	public function edit($id=null) {
        $this->TextQuestion->id = $id;
        $this->set('categories', array('[Selecione]') + $this->TextQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->TextQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->TextQuestion->Course->find('list'));

        if($this->request->isPost()) {
            if ($this->TextQuestion->save($this->request->data)) {
                $this->Session->setFlash('<script> alert("Questão editada com sucesso!"); </script>', true);
                $this->redirect(array('action' => 'index', $this->TextQuestion->id));
            }
        }
        else{
            $this->request->data = $this->TextQuestion->read();
        }

	}

	public function delete ($id){
        $this->TextQuestion->delete($id);
        $this->redirect(array(
            'controller' => 'users', 
            'action' => 'index'));

    }
}
