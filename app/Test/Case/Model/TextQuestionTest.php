<?php
App::uses("TextQuestion", "Model");

class TextQuestionTest extends CakeTestCase {

	//public $fixtures = array('app.text_question');

	public function setUp() {
		parent::setUp();
        $this->TextQuestion = ClassRegistry::init('TextQuestion');
    }
	
	public function testQuestionTextCannotBeEmpty(){
		$this->TextQuestion->set(array('TextQuestion' => array('question_text' => '')));
		$this->assertFalse($this->TextQuestion->validates());
	}
	
	public function testCategoryIdCannotBeZero(){
		$this->TextQuestion->set(array('TextQuestion' => array('category_id' => '0', 'course_id' => '', 'answer_id' => '0')));
		$this->assertFalse($this->TextQuestion->verificaIndices());
	}

	public function testCategoryIdShouldBeDiferentOfZero(){
		$this->TextQuestion->set(array('TextQuestion' => array('category_id' => '1', 'course_id' => '', 'answer_id' => '')));
		$this->assertTrue($this->TextQuestion->verificaIndices());
	}

	public function testCourseIdShouldBeDiferentOfZeroIfCategoryIdEqualToTwo(){
		$this->TextQuestion->set(array('TextQuestion' => array('category_id' => '2', 'course_id' => '1', 'answer_id' => '')));
		$this->assertTrue($this->TextQuestion->verificaIndices());
	}
	public function testCourseIdCannotBeZeroIfCategoryIdEqualToThree(){
		$this->TextQuestion->set(array('TextQuestion' => array('category_id' => '2', 'course_id' => '0', 'answer_id' => '')));
		$this->assertFalse($this->TextQuestion->verificaIndices());
	}
}
?>