<?php
App::uses('AppModel', 'Model', 'Controller/Component');
class Exam extends AppModel {

	public $validate = array(
			
			'course_id'=> array(
				'required' => array(
					'rule' => 'verificaIndices',
					'message' => 'Selecione um curso.'
				)
			)		
		);

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array('AltQuestions', 'TextQuestions');
		
	function gerarSimulado(){
			
		

		}

}
