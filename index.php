<?php


//error_reporting(-1);
//ini_set('display_errors', 'on');

var_dump($_POST);

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<h1>Calculate Your Price with HST Tax! </h1>
	<div class="calc">
		

		<form action="index.php" method="post">
			
		
			
			<label for="num1">Number 1</label>
			<input type="number" id ="num1" name="num1">
			<br>
			<label for="num2">Number 2</label>
			<input type="number" id ="num2" name="num2">
			<br>
			
			<label for="function">Function:</label>
			<select id="function" name="function">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="/">/</option>
				<option value="*">*</option>
				
			</select>
				
			
			<button type="submit">Submit</button>
		</form>
		
		
		<?php if (!empty($_POST['num1']) && !empty($_POST['num2'])) : ?>
		<p>Your price with 13% tax is: $<?php if ($_POST['function'] == '*'){
			echo number_format( $_POST['num1'] * $_POST['num2'],2) * 0.13 + number_format( $_POST['num1'] * $_POST['num2'],2); 
			} 
			elseif($_POST['function'] == '/'){ 
			echo number_format($_POST['num1'] / $_POST['num2'],2) * 0.13 + number_format($_POST['num1'] / $_POST['num2'],2);
			} 
			elseif($_POST['function'] == '+'){ 
			echo number_format($_POST['num1'] + $_POST['num2'],2) * 0.13 + number_format($_POST['num1'] + $_POST['num2'],2) ; 
			} 
			elseif($_POST['function'] == '-'){ 
			echo number_format($_POST['num1'] - $_POST['num2'],2) * 0.13 + number_format($_POST['num1'] - $_POST['num2'],2) ; 
			} 
		
			endif; ?>
		</p>
	</div>	
</body>
</html>
