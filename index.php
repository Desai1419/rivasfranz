<!DOCTYPE html> 
<html> 
<head> 
	<link rel="stylesheet" type="text/css" href="mahcss.css">
	<meta charset="utf-8"> 
	<title>Number Guessing Game</title> 
	<style> 
	html { 
	font-family: sans-serif; } 
	body { 
	 background-color: #9400D3;
      width: 400px;
      height: 400px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);} 
	</style> 
</head> 

<body> 
<h1 style="font-family: Times New Roman;">Guess The Number</h1> 

<p style="font-family: arial;">We have selected a random number between <i>1 - 10</i>. 
See if you can guess it.</p> 

<div class="form"> 
	<label for="guessField">Enter your Guess: </label> 
	<input type = "text" id = "guessField" class = "guessField"> 
	<input type = "submit" value = "Submit your Guess"
	class = "guessSubmit" id = "submitguess"> 
</div> 

<script type = "text/javascript"> 

	var y = Math.floor(Math.random() * 10 + 1); 
	
	var guess = 1; 
	
	document.getElementById("submitguess").onclick = function(){ 
	
var x = document.getElementById("guessField").value; 

if(x == y) {	 
	alert("Congrats! you got it in "
			+ guess + " guesses "); } 
else if (x==""){
    guess++;
	alert("Please enter a guess");} 

else if(x > y) {	 
	guess++; 
	alert("Your guess is too high"); } 
else if (x < y){ 
	guess++; 
	alert("Your guess is too low") }
else if (isNaN(x)){
    guess++;
	alert("Your guess is not a number GET IT RIGHT!!");}
} 
</script> 
</body> 
</html>
