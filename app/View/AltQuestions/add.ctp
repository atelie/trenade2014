
<script type="text/javascript">

function openKCFinder(div) {
    window.KCFinder = {
        callBack: function(url) {
            window.KCFinder = null;
            div.innerHTML = '<div style="margin:5px">Carregando...</div>';
            var img = new Image();
            img.src = url;
			document.getElementById('caminhoimg').value = url;
            img.onload = function() {
                div.innerHTML = '<img width="100%" id="img" src="' + url + '"  />';
                var img = document.getElementById('img');
                var o_w = img.offsetWidth;
                var o_h = img.offsetHeight;
                var f_w = div.offsetWidth;
                var f_h = div.offsetHeight;
                if ((o_w > f_w) || (o_h > f_h)) {
                    if ((f_w / f_h) > (o_w / o_h))
                        f_w = parseInt((o_w * f_h) / o_h);
                    else if ((f_w / f_h) < (o_w / o_h))
                        f_h = parseInt((o_h * f_w) / o_w);
                    img.style.width = f_w + "px";
                    img.style.height = f_h + "px";
                } else {
                    f_w = o_w;
                    f_h = o_h;
                }
                img.style.marginLeft = parseInt((div.offsetWidth - f_w) / 2) + 'px';
                img.style.marginTop = parseInt((div.offsetHeight - f_h) / 2) + 'px';
                img.style.visibility = "visible";
            }
        }
    };
    window.open(<?php echo $this->webroot; ?>+'app/webroot/js/kcfinder/browse.php?type=images&dir=images/public',
        'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
}

</script>

 <?php 
 
 	$input_course = array(
		'label' => 'Curso: ', 
		'disabled',
		'id' => 'course_id',
		'class' => 'form-control',
        'div' => array(
        'class' => 'input_course',
    ));

	$salvar = array(
	    'label' => 'Salvar',
	    'class' => 'btn btn-lg btn-primary'
	);
?>

<h1>Cadastro de Questões Alternativas</h1>
<?php

	echo $this->Form->create('AltQuestion', array(
		'action' => 'add', 'type' => 'file'));
	
	echo $this->Form->input('category_id', array(
		'label' => 'Categoria: ', 
		'onchange' => 'check(this);', 
		'id' => 'category_id',
		'class' => 'form-control'));

	echo $this->Form->input('course_id', $input_course);	

	echo $this->Form->input('question_text', array(
		'label' => 'Enunciado: ',
		'id' => 'question_text',
		'class' => 'ckeditor'));

	echo $this->Form->button('Selecionar Imagem',array('type' => 'button', 'id' => 'img', 'onclick' => 'openKCFinder(this)'));

	echo $this->Form->hidden('caminhoimg', array(
						'value' =>'',
						 'id' => 'caminhoimg'
						 ));

	echo $this->Form->input('answerA', array(
		'label' => 'A): ',
		'class' => 'form-control'));

	echo $this->Form->input('answerB', array(
		'label' => 'B): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answerC', array(
		'label' => 'C): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answerD', array(
		'label' => 'D): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answerE', array(
		'label' => 'E): ',
		'class' => 'form-control'
		));

	echo $this->Form->input('answer_id', array(
		'label' => 'Resposta correta: ',
		'class' => 'form-control'));

	echo $this->Form->end($salvar);

?>
