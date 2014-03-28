	<?php	    
	    $corrigir = array(
	    'label' => 'Corrigir',
	    'class' => 'btn btn-lg btn-primary'
	    );
	?>
	<div class="wrap">
		<?php echo $this->Session->flash();?>
		
		<div class="form-group">		
			<h1>Simulado de <?php echo $nome_curso;?></h1>

			<?php
				$numeroQ = 0;

				$gabarito = array();

				echo '<h3>Conhecimentos Gerais</h3>';

				echo $this->Form->create('Exam', array(
					'action' => 'correct', 'type' => 'post'));

				foreach ($conhecimentos_gerais as $con) {	

					echo '<div class="questions">';

						$numeroQ++;
						echo '<br><p><span style="font-weight: bold;" >'.$numeroQ.')</span> '.$pergunta = $con['AltQuestion']['question_text'].'</p>';
						
						$options = array(
							'1' => ' A) '.$con['AltQuestion']['answerA'],
							'2' => ' B) '.$con['AltQuestion']['answerB'],
							'3' => ' C) '.$con['AltQuestion']['answerC'],
							'4' => ' D) '.$con['AltQuestion']['answerD'],
							'5' => ' E) '.$con['AltQuestion']['answerE']
						);

						$attributes = array(
							'legend' => false,
							'value' => false,
						);

						$gabarito[$numeroQ] = $con['AltQuestion']['answer_id'];


						echo $this->Form->radio($con['AltQuestion']['id'], $options, $attributes);

					echo '</div>';
				}

				echo '<h3>Específicas</h3>';

				foreach ($alternativas as $alt) {	

					echo '<div class="questions">';

						$numeroQ++;
						echo '<br><p><span style="font-weight: bold;" >'.$numeroQ.')</span> '.$pergunta = $alt['AltQuestion']['question_text'].'</p>';
						
						$options = array(
							'1' => ' A) '.$alt['AltQuestion']['answerA'],
							'2' => ' B) '.$alt['AltQuestion']['answerB'],
							'3' => ' C) '.$alt['AltQuestion']['answerC'],
							'4' => ' D) '.$alt['AltQuestion']['answerD'],
							'5' => ' E) '.$alt['AltQuestion']['answerE']
						);

						$attributes = array(
							'legend' => false,
							'value' => false,
						);

						$gabarito[$numeroQ] = $alt['AltQuestion']['answer_id'];

						echo $this->Form->radio($alt['AltQuestion']['id'], $options, $attributes);

					echo '</div>';
				}

				foreach ($dissertativa as $dis) {	

					echo '<div class="questions">';

						$numeroQ++;
						echo '<br><p><span style="font-weight: bold;" >'.$numeroQ.')</span> '.$pergunta = $dis['TextQuestion']['question_text'].'</p>';
						
						echo $this->Form->textarea('answer_text', array(
						'label' => 'Resposta: '));

						$gabarito[$numeroQ] = $dis['TextQuestion']['answer_text'];

					echo '</div>';
				}
			?>

			<?php echo $this->Form->end($corrigir); ?>
            
		</div>
	</div>
