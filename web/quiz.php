<?php 

$root = simplexml_load_file('quiz.xml');
$questions = $root->xpath("//question");
?>

<div class="swiper-container">
  	<div class="swiper-wrapper">
		<?php foreach($questions as $question) {
			$id = $question['id'];
		?>
		<section id="question-<?php echo $id ?>" class="swiper-slide question-wrapper">
		    <h3><?php echo $question->label ?></h3>
		    <div class="question">
		    	<?php 
		    	$i = 0;
		    	foreach($question->answers->answer as $answer) {?>
		        	<p>
		        		<input type="radio" value="<?php echo $answer['isTrue'] ?>" name="question-<?php echo $id ?>" id="question-<?php echo $id?>-ans-<?php echo $i?>"><label for="question-<?php echo $id?>-ans-<?php echo $i?>"><?php echo $answer?></label>
		    		</p>
		    	<?php 
		    	$i++;
		  		} ?>
		    </div>
		    <div class="answer">
		    	<p><?php echo $question->explain ?></p>
		    <?php if($id < sizeof($questions)) { ?>
		        <a href="#question-<?php echo $id+1 ?>" class="swipe-next">Question suivante</a>
		    <?php } else { ?>
			    <a href="#quiz-result" class="swipe-next show-result">Voir le résultat</a>
		    <?php } ?>
		    </div>
		</section>
		<?php } ?>

		<section id="quiz-result" class="swiper-slide result">
		    <h3>Votre score : <span class="score"></span></h3>

		    <p class="less-than-5 note">
		        Aie aie aie... Va falloir potasser un peu :)
		        Aller une nouvelle chance, <a href="#question-1" class="swipe-first">recommence !</a>
		    </p>
		    <p class="between-5-and-7 note">
		        Mentions bien, mais pas top.
		        Aller une nouvelle chance, <a href="#question-1" class="swipe-first">recommence !</a>
		    </p>
		    <p class="between-8-and-10 note">
		        Tu nous connais sur le bout des doigts ! On a bien fait de t'inviter !
		    </p>
		</section>
	</div>
</div>

