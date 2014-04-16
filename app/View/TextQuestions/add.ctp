<?php 
 
 	$input_course = array(
		'label' => 'Curso: ', 
		'disabled',
		'id' => 'course_id',
		'class' => 'form-control',
        'div' => array(
        'class' => 'input_course',
    ));

	$salvar = array(
    'label' => 'Salvar',
    'class' => 'btn btn-lg btn-primary'
    );
?>

 <h1>Cadastro de Questões Dissertativas</h1>
	
	<?php

		echo $this->Form->create('TextQuestion', array(
		'action' => 'add', 'type' => 'file'));
	
		echo $this->Form->input('category_id', array(
			'label' => 'Categoria: ', 
			'onchange' => 'check(this);', 
			'id' => 'category_id',
			'class' => 'form-control'));

		echo $this->Form->input('course_id', $input_course);	

		echo $this->Form->input('question_text', array(
			'label' => 'Enunciado: ',
			'id' => 'question_text',
			'class' => 'ckeditor'));

		echo $this->Form->input('image', array('type' => 'file'));

		echo $this->Form->input('answer_text', array(
			'label' => 'Resposta: ',
			'class' => 'form-control'));

		echo $this->Form->end($salvar);

	?>