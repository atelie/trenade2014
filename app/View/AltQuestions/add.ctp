
<h1>Cadastro de Questões Alternativas</h1>
<?php

	echo $this->Form->create('AltQuestion', array(
		'action' => 'add', 'type' => 'file'));
	
	echo $this->Form->input('category_id', array(
		'label' => 'Categoria: ', 
		'onchange' => 'check(this);', 
		'id' => 'category_id'));

	echo $this->Form->input('area_id', array(
		'label' => 'Área: ', 
		'disabled', 
		'id' => 'area_id'));

	echo $this->Form->input('course_id', array(
		'label' => 'Curso: ', 
		'disabled', 
		'id' => 'course_id'));

	echo $this->Form->input('question_text', array(
		'label' => 'Enunciado: ',
		'id' => 'question_text'));

	echo $this->Form->input('answerA', array(
		'label' => 'A): '));

	echo $this->Form->input('answerB', array(
		'label' => 'B): '));

	echo $this->Form->input('answerC', array(
		'label' => 'C): '));

	echo $this->Form->input('answerD', array(
		'label' => 'D): '));

	echo $this->Form->input('answerE', array(
		'label' => 'E): '));

	echo $this->Form->input('answer_id', array(
		'label' => 'Resposta correta: '));

	echo $this->Form->end(__('Salvar'));

?>
