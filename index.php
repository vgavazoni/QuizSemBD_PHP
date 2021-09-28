<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="icon.ico" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <?PHP session_start();  ?>
        <title>Tela de Quiz sem banco de dados</title>
  </head>
 
    <body style="background-color:#ffffff;">
	
		
		<div class="blabla" style="    display: inline-table; background-color:#007bff; width:100%;" role="alert">
	  
			<center><p style="margin-top:14px; color:white;"><b>Tela de Quiz sem banco de dados</b></p></center>
		</div>
		<br>
		
		<center>
		<br>
		<div class="container" style="text-align:left;">
		<?php


		
		$rid = rand(1,3);
		
		
		
		if ($rid == 1){
	
	echo "
<form action='process2.php?id=1' method='post' id='quizForm'>

	<center><input name='nome' id='nome' type='text' placeholder='Seu nome aqui'/></p>
	<input name='doc' type='text' id='doc' maxlength='11'  placeholder='Seu documento aqui'>
	<p>Responda ao questionário, cada resposta correta vale 10% de desconto!</p>
	</center>

        <h5>1 - Quando perguntam 'Você é alemão?</h5>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerOneA'>A) Yes I´m not</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerOneB'>B) He is</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerOneC'>C) No I´m not</label>
        </div>
        
        
     
        
        <h5>2 - How are you?</h5>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerTwoA'>A) I´m a businessman</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTwoB'>B) I´m fine thanks</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTwoC'>C) I´m from Brasil</label>
        </div>
        
        
      
        
         
        <h5>3 - What´s your name?</h5>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerThreeA'>A) My name is</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerThreeB'>B) My names are</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerThreeC'>C) Your name is</label>
        </div>
        
		
		
		
        <h5>4 - There is Bob and … friend</h5>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerFourA'>A) His</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerFourB'>B) He´s</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerFourC'>C) Its</label>
        </div>
        
		
		
		
		
        <h5>5 - Where´s Bob going?  … going to Canada</h5>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerFiveA'>A) They are</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerFiveB'>B) He´s</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerFiveC'>C) Bob does</label>
        </div>
        
		
		
		
		
        <h5>6 - What are you doing?</h5>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerSixA'>A) I´m a teacher</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerSixB'>B) I´m working</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerSixC'>C) You are going to Campinas</label>
        </div>
        
		
		
		
        <h5>7 - Can you speak English?  Yes … </h5>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerSevenA'>A) I can´t</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerSevenB'>B) I do</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerSevenC'>C) I can</label>
        </div>
        
		
		
		
        <h5>8 - My bag is heavy but yours is …</h5>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerEightA'>A) More heavy</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerEightB'>B) Heavier</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerEightC'>C) Heavyer</label>
        </div>
        
		
		
		
        <h5>9 - Cars are expensive, but houses are … </h5>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerNineA'>A) More expensive</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerNineB'>B) Expensiver</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerNineC'>C) More expensiver</label>
        </div>
        
		
		
		
        <h5>10 - He´s … old friend</h5>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTenA'>A) One</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerTenB'>B) A</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerTenC'>C) An</label>
        </div>
        
    
     "?><input type='submit' value='Enviar' style="font-size: 30px; "><br><?php "/>
    
</form>";

}
	
		

if ($rid == 2){
	
	echo "


<form action='process2.php?id=2' method='post' id='quizForm'>

	<center><input name='nome' id='nome' type='text' placeholder='Seu nome aqui'/></p>
<input name='doc' type='text' id='doc' maxlength='11'  placeholder='Seu documento aqui'>
<p>Responda ao questionário, cada resposta correta vale 10% de desconto!</p>
</center>
	
        <h5>1 - My bag is heavy but yours is …</h5>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerEightA'>A) More heavy</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerEightB'>B) Heavier</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerEightC'>C) Heavyer</label>
        </div>
        
		
		
		
        <h5>2 - Cars are expensive, but houses are … </h5>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerNineA'>A) More expensive</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerNineB'>B) Expensiver</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerNineC'>C) More expensiver</label>
        </div>
        
   
    	
        <h5>3 - Quando perguntam 'Você é alemão?</h5>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerOneA'>A) Yes I´m not</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerOneB'>B) He is</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerOneC'>C) No I´m not</label>
        </div>
        
        
     
        
        <h5>4 - How are you?</h5>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerTwoA'>A) I´m a businessman</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTwoB'>B) I´m fine thanks</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTwoC'>C) I´m from Brasil</label>
        </div>
        
        
      
        
        
        <h5>5 - What´s your name?</h5>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerThreeA'>A) My name is</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerThreeB'>B) My names are</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerThreeC'>C) Your name is</label>
        </div>
        
		
		
		
		
        <h5>6 - There is Bob and … friend</h5>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerFourA'>A) His</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerFourB'>B) He´s</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerFourC'>C) Its</label>
        </div>
        
		
		
		
		
        <h5>7 - Where´s Bob going?  … going to Canada</h5>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerFiveA'>A) They are</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerFiveB'>B) He´s</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerFiveC'>C) Bob does</label>
        </div>
       
		
		
		
		
        <h5>8 - What are you doing?</h5>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerSixA'>A) I´m a teacher</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerSixB'>B) I´m working</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerSixC'>C) You are going to Campinas</label>
        </div>
        
		
		
		
        <h5>9 - Can you speak English?  Yes … </h5>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerSevenA'>A) I can´t</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerSevenB'>B) I do</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerSevenC'>C) I can</label>
        </div>
        
		
		
		
		
        <h5>10 - He´s … old friend</h5>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTenA'>A) One</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerTenB'>B) A</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerTenC'>C) An</label>
        </div>
        
      "?><input type='submit' value='Enviar' style="font-size: 30px; "><br><?php "/>
    
</form>
";
}

if ($rid == 3){
	
	echo "
<form action='process2.php?id=3' method='post' id='quizForm'>

		<center><input name='nome' id='nome' type='text' placeholder='Seu nome aqui'/></p>
<input name='doc' type='text' id='doc' maxlength='11'  placeholder='Seu documento aqui'>
<p>Responda ao questionário, cada resposta correta vale 10% de desconto!</p>
</center>
	
        <h5>1 - What´s your name?</h5>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerThreeA'>A) My name is</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerThreeB'>B) My names are</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerThreeC'>C) Your name is</label>
        </div>
       
		
		
		
		
        <h5>2 - There is Bob and … friend</h5>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerFourA'>A) His</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerFourB'>B) He´s</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerFourC'>C) Its</label>
        </div>
       
		
		

		<h5>3 - Quando perguntam 'Você é alemão?</h5>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerOneA'>A) Yes I´m not</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerOneB'>B) He is</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerOneC'>C) No I´m not</label>
        </div>

		
        <h5>4 - How are you?</h5>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerTwoA'>A) I´m a businessman</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTwoB'>B) I´m fine thanks</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTwoC'>C) I´m from Brasil</label>
        </div>

		
		
        <h5>5 - Where´s Bob going?  … going to Canada</h5>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerFiveA'>A) They are</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerFiveB'>B) He´s</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerFiveC'>C) Bob does</label>
        </div>

		
		
        <h5>6 - What are you doing?</h5>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerSixA'>A) I´m a teacher</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerSixB'>B) I´m working</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerSixC'>C) You are going to Campinas</label>
        </div>
     
		
		
	
        <h5>7 - Can you speak English?  Yes … </h5>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerSevenA'>A) I can´t</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerSevenB'>B) I do</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerSevenC'>C) I can</label>
        </div>
     
		
		

        <h5>8 - My bag is heavy but yours is …</h5>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerEightA'>A) More heavy</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerEightB'>B) Heavier</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerEightC'>C) Heavyer</label>
        </div>
      
	  
	  
        <h5>9 - Cars are expensive, but houses are … </h5>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerNineA'>A) More expensive</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerNineB'>B) Expensiver</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerNineC'>C) More expensiver</label>
        </div>
       
		
		
		
        <h5>10 - He´s … old friend</h5>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' style='width: 30px;height: 25px;'/>
        <label for='answerTenA'>A) One</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' style='width: 30px;height: 25px;'/>
        <label for='answerTenB'>B) A</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' style='width: 30px;height: 25px;'/>
        <label for='answerTenC'>C) An</label>
        </div>
  
      "?><input type='submit' value='Enviar' style="font-size: 30px; "><br><?php "/>
    
</form>";

}
			?>
			<br>
			</div>
		</center>


		
      </div>
    </body>
</html>