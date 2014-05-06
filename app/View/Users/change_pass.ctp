<div class="users form" align='center'>
<?php echo $this->Form->create(array('action' => 'change_pass'));?>
       
      <h1>Alteração de Senha</h1>

      <?php echo $this->Form->input('password', array('label'=>'Nova Senha', 'type' => 
           'password', 'value' => ''));
      ?>
       
      <?php echo $this->Form->input('confirm_password', array('label'=>'Confirmação da Nova Senha', 'type' => 'password'));
      ?>
<?php echo $this->Form->end(__('Salvar', true));?>
</div>
