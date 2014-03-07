<!DOCTYPE html>
<html>
<head>
	<?php 
		echo $this->Html->css('jquery-ui.css');
		echo $this->Html->css('/development-bundle/themes/smoothness/jquery-ui.css');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->script('jquery-1.9.1.js');
		echo $this->Html->script('jquery-ui.js');
		echo $this->Html->script('trenade.js');
		echo $this->Html->script('jquery.js');
		echo $this->Html->css('style.css');
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".mostraAlt").click(function(){
				$("#submenuAlt").show();
				$("#submenuDiss").hide();
			});
			$(".mostraDiss").click(function(){
				$("#submenuDiss").show();
				$("#submenuAlt").hide();
			});
		});
		
	</script>
</head>
<body>
	<div class="wrap">
		<?php echo $this->Session->flash(); ?>
		<div class="sidebar">
			<div class="menu">
				<p id="icon-trenade"></p>
				<ul>
					<li><a class="icon-alternativas mostraAlt" href="#">Questões alternativas</a></li>
					<li><a class="icon-dissertativas mostraDiss" href="#">Questões dissertativas</a></li>
				</ul>
				<?php echo $this->Html->link(__('Logout'), array(
					'controller' => 'Users', 'action' => 'logout'),
					array('id' => 'icon-logout'));
				?>
			</div>
			<div id="submenuDiss" class="submenu">
			<ul class="listaDiss">
				<li class="titulo">Questões dissertativas</li>
					<ul>
						<li>
							<?php
								echo $this->Html->link(__('Adicionar'), array(
								'controller' => 'TextQuestions', 'action' => 'add'));
							?>
						</li>
						<li><?php
								echo $this->Html->link(__('Gerenciar'), array(
								'controller' => 'TextQuestions', 'action' => 'index'));
							?>
						</li>
					</ul>
			</ul>
			</div>
			<div id="submenuAlt" class="submenu">
			<ul class="lista">
				<li class="titulo">Questões alternativas</li>
					<ul>
						<li>
							<?php
								echo $this->Html->link(__('Adicionar'), array(
								'controller' => 'AltQuestions', 'action' => 'add'));
							?>
						</li>
						<li><?php
								echo $this->Html->link(__('Gerenciar'), array(
								'controller' => 'AltQuestions', 'action' => 'index'));
							?>
						</li>
					</ul>
			</ul>
			</div>
		</div>
		<div class="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>