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
		'id' =>'files',
        'div' => array(
        'class' => 'fileUpload btn btn-primary'),
        'a' => array('class' => 'btn btn-primary', 'href' => 'javascript:;')
    ); 
?>

<h1>Editar Questões Dissertativas</h1>
<?php

	echo $this->Form->create('TextQuestion', array(
		'action' => 'edit', 'type' => 'file', 'id'=>'TextQuestionAddForm'));


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

	if(isset($NomeImagem['TextQuestion']['image'])) {
	echo $this->Html->image('/upload/'.$NomeImagem['TextQuestion']['image'], array('alt' => 'uploaded image'));
	} 

	echo '<br><br>';


	//echo $this->Form->input('image', $upload);
	
	?>
	
	<div class="thumbnail">
		
		<?php 
			if(isset($NomeImagem['AltQuestion']['image'])) {
				echo $this->Html->image('/upload/'.$NomeImagem['AltQuestion']['image'], array('id' => 'imagemBd'));
				} 
		?>

		<span class='label' id="imagemQuestao"></span>

        <div class="caption text-center">
            <div class="btn btn-primary btn-file">
               <?php echo $this->Form->input('image', $upload); ?>
            </div>
         
        </div>
    </div>
	
	
	<button type="button" class="btn btn-danger" onclick="SetaNullImagemVazia();" >Excluir imagem</button>


	<input type="hidden" name="imagemvazia" value="" id="imagemvazia">
	<br> 
    
    <?php  
	
	echo $this->Form->input('answer_text', array(
		'label' => 'Resposta correta: ',
		'class' => 'form-control'));

	echo $this->Form->end($salvar);

?>


