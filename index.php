<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> XKCD Password Generator </title>	
  <?php require_once "generator.php"; ?>
  <?php $wordsnumber = 0; ?>
 
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
</head>

<body>

  <div class="container-fluid">

<h1 > XCCD Password Generator </h1>




<form class="form-horizontal" action="index.php" method="POST" accept-charset="UTF-8"
enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>

	<div id="formitems">

		<label>Select the number of words</label>
		
		<select name="wordsnumber" id="wordsnumber">
		  <option  value="1">1</option>
		  <option  value="2">2</option>
		  <option  value="3">3</option>
		  <option  value="4">4</option>
		  <option  value="5">5</option>
		</select>

	<div id="checkboxes">
		<input type="checkbox" name="numbers" value="true"> Add a number
		<br>
		<input  type="checkbox" name="symbols" value="true"> Add a symbol
	</div>

	<input type="submit" value="Submit">

	</div>

</form>


 <?php 
  
  $wordCount = 1;
 
  $genpw = '';
  

    $wordCount = intval($_POST['wordsnumber']);
  
 
  if (isset($_POST['numbers'])) 
  {
      $numberyes = true;
  }
  
  if (isset($_POST['symbols'])) 
  {
     $symbolyes = true;
  }
  
     
    $genpw = $password;
            
  
  
  
  ?>

<h2> Your Password is:  <?php echo $genpw; ?> </h2>

</div>

</body>

</html>