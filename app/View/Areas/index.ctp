<h1>Areas</h1>

<?php
echo $this->Form->create('Area', array('action' => 'add'));
echo $this->Form->input('name');
echo $this->Form->end('Criar');
?>