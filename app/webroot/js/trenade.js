$(document).ready(function(){

	check();

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


