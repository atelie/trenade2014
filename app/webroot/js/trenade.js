$(document).ready(function(){

	check();
	
	$("#files").change(function() {
    	$("#imagemQuestao").html('<img src="'+window.URL.createObjectURL(this.files[0])+'" id="imagemVisualiza"  >');
 		$("#imagemBd").removeAttr('src');
 		 $("#imagemvazia").removeAttr('value');
    });

});



function check(){

	if (category_id.selectedIndex==2) {
		document.getElementById('course_id').disabled = false;
		$(".input_course").show();
	}
	else {
		document.getElementById('course_id').disabled = true;
	    $(".input_course").hide();
	}
};

function validaimg(){

		$("#files").removeAttr('value');
		$("#imagemVisualiza").attr("src", $("#files").val());


}

function SetaNullImagemVazia(){
        $("#imagemvazia").val("vazio");
		$("#files").removeAttr('value');
		$("#imagemVisualiza").attr("src", $("#files").val());
		$("#imagemBd").attr("src", $("#files").val());		
}

