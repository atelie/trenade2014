<?php 
 
 	$input_course = array(
		'label' => 'Curso: ', 
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

<h1>Editar Questões Alternativas</h1>
<?php

	echo $this->Form->create('AltQuestion', array(
		'action' => 'edit', 'type' => 'file'));


	echo $this->Form->input('category_id', array(
		'label' => 'Categoria: ', 
		'onchange' => 'check(this);', 
		'id' => 'category_id',
		'class' => 'form-control'));

	echo $this->Form->input('course_id', $input_course);	

	echo $this->Form->input('question_text', array(
		'label' => 'Enunciado: ',
		'id' => 'question_text',
		'class' => 'form-control'
		));
	
	if(isset($NomeImagem['AltQuestion']['image'])) {
	echo $this->Html->image('/upload/'.$NomeImagem['AltQuestion']['image'], array('alt' => 'uploaded image'));
	} 

	echo '<br>';


	echo $this->Form->input('image', $upload);

	?>
	
	<span class='label label-info' id="upload-file-info"></span>
    
    <?php

    $removerImagem = true;

	echo $this->Form->input('removerImagem', array(
							'label' => 'Marque esta opção caso queira remover a imagem atual.',
                            'type'=>'checkbox'));
 
	echo $this->Form->input('answerA', array(
		'label' => 'A): ',
		'class' => 'form-control'
	));

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

	if($removerImagem) {
		$this->Form->input('image', null);
	}

	echo $this->Form->end($salvar);

?>


