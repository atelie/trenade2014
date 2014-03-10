$(document).ready(function(){
    
  $(".input_course").hide();
	
});

function check() {
	if (category_id.selectedIndex==2) {
		document.getElementById('course_id').disabled = false;
		$(".input_course").show();
		course_id.selectedIndex = 0;	
	}
	else {
		document.getElementById('course_id').disabled = true;
	    $(".input_course").hide();
		course_id.selectedIndex = 0;
	}
}

