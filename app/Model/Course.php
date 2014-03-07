<?php
	class Course extends AppModel{
		public $belongsTo = array('Category');
		public $hasMany = array('AltQuestions', 'TextQuestions');
	}
?>