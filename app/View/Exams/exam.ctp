<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="wrap">
		<?php echo $this->Session->flash(); ?>
		<div class="sidebar">
			<div class="menu">
				<p id="icon-trenade"></p>
				<ul>
					<li><a class="icon-simulado" href="#">Simulado</a></li>
					<li><a class="icon-estudo" href="#">Área de Estudo</a></li>
				</ul>
				<?php echo $this->Html->link(__('Logout'), array(
					'controller' => 'Users', 'action' => 'logout'),
					array('id' => 'icon-logout'));
				?>
			</div>
		</div>
		<div class="content">			
			<h1>Simulado de <?= $nome_curso['Exams']['course_id'] ;?></h1>
		</div>
	</div>
</body>
</html>