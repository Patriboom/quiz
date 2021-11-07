<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Amusons-nous un peu</title>
<link rel=stylesheet HREF="general.css" TYPE="text/css">
</head>
<body>
<script type="text/javascript" src="scripts/Quiz.js" ></script>
<br /><br />
<form name="Questionne" id="FormQuestionne" action="Quiz.php" method="POST">
<?php
	session_start();
	$ChxQuiz = $_POST["ChxQuiz"] ?? $_GET["ChxQuiz"] ?? "Vide";
	$_SESSION["ChxQuiz"] = $ChxQuiz;
	if ($ChxQuiz == "Vide" ) {
		echo '<script>document.location.href="index.php";</script>';
	} else {
		//Page de jeu
		$_SESSION["ChxQuiz"] = $ChxQuiz;
		$_SESSION["Pseudo"]  = $_POST["pseudo"];
		$_SESSION["NumMbre"] = $_POST["pseudo"].'_'.date("YmdHis").rand(1000, 9999);

		if (!file_exists("temp/".$_SESSION["ChxQuiz"])) {
			mkdir("temp/".$_SESSION["ChxQuiz"]);
		}
		if ($_POST["pseudo"] == 'Patriboom') {
			file_put_contents("temp/".$_SESSION["ChxQuiz"]."/Prof.htm", "Début à ".date("H:i:s")." ce ".date("Y-m-d")."\n".$_SESSION["ChxQuiz"]);
			echo '<script>document.location.href="Anim.php";</script>';
		}
		if (!file_exists("temp/".$_SESSION["ChxQuiz"]."/".$_SESSION["NumMbre"]) && $_POST["pseudo"] != 'Patriboom') {
			mkdir("temp/".$_SESSION["ChxQuiz"]."/".$_SESSION["NumMbre"]);
		}

?>
	<div id="Global" style="text-align: center;">
			<h1>Quiz</h1>
			<img src="images/Quiz.png" width="154" height="150" align="left" style="position: absolute; top: 3px; left: 15px;") />
			<br />
			<h1 style="position: absolute; top: 5px; left: 175px;"><?php echo $_SESSION["ChxQuiz"]; ?></h1>
			<br clear="all" />
			<input name="Soumettre" value="Soumettre" type="hidden" />
			<input name="mod" value="Admin" type="hidden" />
			<input name="fct" value="Cours" type="hidden" />
			<input name="Agir" value="Quiz" type="hidden" />
			<input name="Jeu" value="Fini" type="hidden" />
			<input name="ChxQuiz" value="'.$_SESSION["ChxQuiz"].'" type="hidden" />
			<input name="chronoDebut" id="chrono_debut" value="" type="hidden" />
			<input name="chronoFin" id="chrono_fin" value="" type="hidden" />
			<div id="Corpus" class="QuizCorpus">
			<h2 id="H2_rebours"><img src="images/BullesMontant.gif" height="125" align="left" /><?php echo $ChxQuiz; ?> commencera dans <span id="span_rebours"> ... </span> secondes</h2>
			<div id="Questions">Préparez-vous !</div>
			<br clear="all" />
			<div id="Reponse" class="Reponse"></div>
			<div id="StatsImage" class="StatImg"></div>
			<div id="StatsPerso" class="Stat"></div>
		</div>
	
		<div id="Discussion" class="QuizDicussion"></div>
	</div>
<?php } ?>
</form>
<script>
var rebours = 0;
var delai = 5;
	    	
 var delayons = setInterval(
 	function() { 
 		document.getElementById('span_rebours').innerHTML = (delai-(rebours++));
 		if (rebours > delai ) { Commencons('FR', '<?php echo $ChxQuiz; ?>'); }
 
 	}, 1000);	
</script>
</body>
</html>