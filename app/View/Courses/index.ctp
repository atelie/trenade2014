<h1>Cursos</h1>

<?php
echo $this->Form->create('Course', array('action' => 'add'));
echo $this->Form->input('name');
echo $this->Form->end('Criar');
?>