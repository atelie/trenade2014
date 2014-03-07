<table class="table table-bordered table-striped">

	<tr>
		<th>Categoria</th> 
		<th>Enunciado</th>
		<th>Gerenciar</th>
	</tr>

	<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo $user['Category']['name']; ?> </td>
			<td><?php echo $user['AltQuestion']['question_text']; ?></td>
			<td><?php echo $this->Html->link(__('Editar'), array(
				'action' => 'edit', $user['AltQuestion']['id'])) ?>
			<?php echo $this->Html->link(__('Deletar'), array(
				'action' => 'delete', $user['AltQuestion']['id'])) ?></td>

		</tr>
	<?php endforeach; ?>
</table>