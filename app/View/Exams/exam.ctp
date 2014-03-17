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
					echo 
					'<br><br><br>'.$numeroQ.') '.$pergunta = $random_question['AltQuestion']['question_text'].
					'<br><br>A) '.$respostaA = $random_question['AltQuestion']['answerA'].
					'<br>B) '.$respostaB = $random_question['AltQuestion']['answerB'].
					'<br>C) '.$respostaC = $random_question['AltQuestion']['answerC'].
					'<br>D) '.$respostaD = $random_question['AltQuestion']['answerD'].
					'<br>E) '.$respostaE = $random_question['AltQuestion']['answerE'];
				}

			?>
            
		</div>
	</div>
</body>
</html>