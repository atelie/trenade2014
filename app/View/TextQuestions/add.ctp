<?php 
 
 	$input_course = array(
	 	'label' => 'Curso: ', 
	 	'disabled', 
	 	'id' => 'course_id',
	 	'div' => array(
	 	'class' => 'input_course',
 	)); 
?>

 <h1>Cadastro de Questões Dissertativas</h1>
	
	<?php

		echo $this->Form->create('TextQuestion', array(
		'action' => 'add', 'type' => 'file'));
	
		echo $this->Form->input('category_id', array(
			'label' => 'Categoria: ', 
			'onchange' => 'check(this);', 
			'id' => 'category_id'));

		echo $this->Form->input('course_id', $input_course);	

		echo $this->Form->input('question_text', array(
			'label' => 'Enunciado: ',
			'id' => 'question_text'));

		echo $this->Form->input('answer_text', array(
			'label' => 'Resposta: '));

		echo $this->Form->end(__('Salvar'));

	?>