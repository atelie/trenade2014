
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

	$upload = array(
		'label' => 'Selecionar imagem...', 
		'type' => 'file',
		'class' => 'upload',
		'onchange' => '$("#upload-file-info").html($(this).val());',
        'div' => array(
        'class' => 'fileUpload btn btn-primary'),
        'a' => array('class' => 'btn btn-primary', 'href' => 'javascript:;')
    ); 
?>

<h1>Cadastro de Questões Alternativas</h1>

<?php

	echo $this->Form->create('AltQuestion', array(
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
		'class' => 'form-control'));

    echo $this->Form->input('image', $upload);
    ?>
	
	<span class='label label-info' id="upload-file-info"></span>
    
    <?php
	/*
	if(isset($imageName)) {
		echo $this->Html->image('/upload/'.$imageName, array('alt' => 'uploaded image'));
	}
	*/
	echo $this->Form->input('answerA', array(
		'label' => 'A): ',
		'class' => 'form-control'));

	echo $this->Form->input('answerB', array(
		'label' => 'B): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answerC', array(
		'label' => 'C): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answerD', array(
		'label' => 'D): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answerE', array(
		'label' => 'E): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answer_id', array(
		'label' => 'Resposta correta: ',
		'class' => 'form-control'));

	echo $this->Form->end($salvar);

?>


