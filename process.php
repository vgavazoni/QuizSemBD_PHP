<html>
<head>
 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="icon.ico" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 
        <title>Tela de Quiz</title>
</head>
<?php 

	$fid = $_GET['id'];
	
	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$doc = isset($_POST['doc']) ? $_POST['doc'] : '';
	$_SESSION['nome'] = $nome;	
	$_SESSION['doc'] = $doc;

	
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$answer4= $_POST['answerFour'];
	$answer5= $_POST['answerFive'];
	$answer6= $_POST['answerSix'];
	$answer7= $_POST['answerSeven'];
	$answer8= $_POST['answerEight'];
	$answer9= $_POST['answerNine'];
	$answer10= $_POST['answerTen'];
	$score = 0;
	
	 if( $answer1 == null || $answer2 == null || $answer3 == null || $answer4 == null || $answer5 == null || $answer6 == null || $answer7 == null || $answer8 == null || $answer9 == null || $answer10 == null){
		header('Location:index.php');
		echo "<center>Volte e preencha todos os campos!</center><br>";
	}
	
?>
<body bgcolor="#93b039">

<div class="blabla" style="    display: inline-table; background-color:#007bff; width:100%;" role="alert">
	  
			<center><p style="margin-top:14px; color:white;"><b>Tela de Quiz</b></p></center>
		</div>
		<br>

<div id="wrapper">


<center><h1><?PHP echo "Certificamos que "?><b style="color:green;"><?PHP echo"$nome"; ?></b> documento nº <b style="color:green;"><?PHP echo"$doc"; ?></b> finalizou o teste para ganhar uma bolsa de estudos!<br><br>Voucher nº <b style="color:green;"> <?PHP $str = "AaBbCcDdEeFf1234567890ghijlm";  $codigo = str_shuffle($str); echo "$codigo";?></b></h1></center>


<?php
   


	
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	if ($answer4 == "A"){$score++;}
	if ($answer5 == "B"){$score++;}
	if ($answer6 == "C"){$score++;}
	if ($answer7 == "A"){$score++;}
	if ($answer8 == "B"){$score++;}
	if ($answer9 == "C"){$score++;}
	if ($answer10 == "C"){$score++;}
	
	
	if ($score == 10)
	{
		echo "<center><h2>Você obteve 100% de bolsa"?> <b style="color:green;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 9){
		echo "<center><h2>Você obteve 90% de bolsa"?> <b style="color:blue;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 8){
		echo "<center><h2>Você obteve 80% de bolsa"?> <b style="color:blue;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 7){
		echo "<center><h2>Você obteve 70% de bolsa"?> <b style="color:blue;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 6){
		echo "<center><h2>Você obteve 60% de bolsa"?> <b style="color:blue;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 5){
		echo "<center><h2>Você obteve 50% de bolsa"?> <b style="color:blue;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 4){
		echo "<center><h2>Você obteve 40% de bolsa"?> <b style="color:blue;"> parabéns</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 3){
		echo "<center><h2>Você obteve 30% de bolsa"?> <b style="color:blue;"> muito bom</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 2){
		echo "<center><h2>Você obteve 20% de bolsa"?> <b style="color:blue;"> muito bom</b><?php "<p> Imprima essa página!</p></center>";
	} else if ($score == 1){
		echo "<center><h2>Você obteve 10% de bolsa"?> <b style="color:red;"> muito bom</b><?php "<p> Imprima essa página!</p></center>";
	} else {
		echo "<center><h2>"?> <b style="color:red;"> Você não conseguiu bolsa! </b><?php "<p> Imprima essa página!</p></center>";
	}
	
	
	
?>


</div>

</body>
</html>