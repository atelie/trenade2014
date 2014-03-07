<h1>Cadastrar Usuário</h1>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('name', array(
		'label' => 'Nome do professor: '));
	echo $this->Form->input('username', array(
		'label' => 'Registro do professor: ', 'type' => 'text'));
	echo $this->Form->input('email', array(
		'label' => 'E-mail: '));
	echo $this->Form->input('teacher', array(
		'label' => 'Professor: '));
	echo $this->Form->input('password', array(
		'label' => 'Senha: '));
	echo $this->Form->input('confirm_password', array(
		'label'=>'Confirmação da senha', 'type' => 'password'));
	echo $this->Form->end(__("Salvar"));


	echo $this->Html->link(__('Voltar para menu'), array('action' => 'index'));
?>