<?php 
var_dump($_REQUEST);
$para=array(
	'quiz_name'=>$_REQUEST['quiz_name'],
	'duration'=>$_REQUEST['duration'],
	'dept'=>$_REQUEST['dept'],
	'noofquestion'=>$_REQUEST['noofquestion'],
	'sub'=>$_REQUEST['sub'],
	'quizDate'=>$_REQUEST['quizDate']
); 
$qno=1;
$this->model->createQuiz($para);
$this->model->AddQuestion($qno,$para,1);
?>
