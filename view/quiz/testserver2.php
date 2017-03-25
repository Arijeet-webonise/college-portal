[
<?php
$site=$GLOBALS['site'];
$f=FALSE; 
foreach ($quizlist as $quiz) {
	if($f){
		echo ",";
	}else{
		$f=TRUE;
	}
	showQuiz($quiz);
}
	  ?>
]
<?php 

function showQuiz($quiz)
{
	$site=$GLOBALS['site'];
	?>
{
	"QuestionBank":[
		<?php foreach ($quiz['question'] as $qkey => $question) {
			if($qkey!=0)
				echo ",";
			?>
		{
			"question":"<?php echo $question->question; ?>",
			"image":"<?php echo $site->getHost(); ?>/image/<?php $question->image; ?>",
			"marks":<?php echo $question->marks; ?>,
			"options":[
			<?php foreach ($question->options as $okey => $options) {
				if($okey!=0)
					echo ",";
				?>
				{
					"opvalue":"<?php echo $options['option_value']; ?>",
					"answer":<?php echo $options['isanswer']?0:1; ?>
				}
				<?php
			} ?>
			]
		}
			<?php
		} ?>
	]
}
	<?php
} ?>
