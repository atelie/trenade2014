
<?php 

	$continuar = array(
		'label' => 'Continuar',
		'class' => 'btn btn-primary'
	);

	?>


	<div class="wrap">
		<?php echo $this->Session->flash(); ?>

		<div align="center" class="form-sumilado">			
			<h1>Verificar Desempenho de Aluno</h1>
			
			<?php

			echo $this->Form->create('Users', array('action' => 'student_performance'));
			
			echo $this->Form->input('username', array(
			'label' => 'RA: ',
			'class' => 'form-control'));
			
			echo $this->Form->end($continuar);
			?>
		</div>
	</div>