
	<div class="wrap">
		<?php echo $this->Session->flash(); ?>
		
		<div class="form-group">		
			<h1>Simulado de <?php echo $nome_curso;?></h1>

			<?php
				$numeroQ = 0;
				foreach ($random_questions as $random_question) {	

					echo '<div class="questions">';

						$numeroQ++;
						echo '<br><p><span style="font-weight: bold;" >'.$numeroQ.')</span> '.$pergunta = $random_question['AltQuestion']['question_text'].'</p>';
						
						$options = array(
							'1' => ' A) '.$random_question['AltQuestion']['answerA'],
							'2' => ' B) '.$random_question['AltQuestion']['answerB'],
							'3' => ' C) '.$random_question['AltQuestion']['answerC'],
							'4' => ' D) '.$random_question['AltQuestion']['answerD'],
							'5' => ' E) '.$random_question['AltQuestion']['answerE']
						);

						$attributes = array(
							'legend' => false,
							'value' => false,
						);

						echo $this->Form->radio($random_question['AltQuestion']['id'], $options, $attributes);

					echo '</div>';
				}

			?>
            
		</div>
	</div>
