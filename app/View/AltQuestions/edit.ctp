<?php 
	echo $this->Form->create('AltQuestion', array('action' => 'edit')); 	
?>
	<fieldset>
		<legend><?php echo __('Editar Questões Alternativas'); ?></legend>
	<?php
		echo $this->Form->input('category_id', array(
			'label' => 'Categoria: ',
			'onchange' => 'check(this);',
			'id' => 'category_id'));

		echo $this->Form->input('area_id', array(
			'label' => 'Área: ',
			'id' => 'area_id',
			'disabled'));
		
		echo $this->Form->input('course_id', array(
			'label' => 'Curso: ',
			'id' => 'course_id',
			'disabled'));
		
		echo $this->Form->input('question_text', array(
		'label' => 'Enunciado: '));

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

	?>
	</fieldset>
<?php 
	echo $this->Form->end(__('Salvar')); 
?>