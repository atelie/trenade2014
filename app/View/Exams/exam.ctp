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
			<h1>Simulado de <?php echo $nome_curso;?></h1>

			<?php
				$numeroQ = 0;


				

				foreach ($random_questions as $random_question) {					
					$numeroQ++;
					echo '<br><p>'.$numeroQ.') '.$pergunta = $random_question['AltQuestion']['question_text'].'</p>';
					
					$options = array(
						'1' => '<br>A) '.$random_question['AltQuestion']['answerA'],
						'2' => 'B) '.$random_question['AltQuestion']['answerB'],
						'3' => 'C) '.$random_question['AltQuestion']['answerC'],
						'4' => 'D) '.$random_question['AltQuestion']['answerD'],
						'5' => 'E) '.$random_question['AltQuestion']['answerE']
					);

					$attributes = array(
						'legend' => false,
						'value' => false,
					);

					echo $this->Form->radio('type', $options, $attributes);
				}

			?>
            
		</div>
	</div>
</body>
</html>