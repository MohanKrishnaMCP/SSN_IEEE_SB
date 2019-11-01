
<!DOCTYPE html>
<html>
<head>
    <title>IEEE SB</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</head>

<body>

<?php

if($_SESSION["auth"]=="dog"){
echo "
<div class='container'>
	<h1>DASHBOARD</h1>
<br><br>
<form action='insert.php' id='dash' method='post'>
<h4>event name</h4>
<input type='text' name='ename'><br><br>
<h4>date</h4>
<input type='date' name='dates'><br><br>
<h4>No. of Participants</h4>
<input type='number' name='nop'><br><br>
<h4>Description</h4>
for new line use - &ltbr&gt <br>
paragraphs should be placed in between &ltp&gt and &lt/p&gt tags 
<textarea rows='25' cols='150' name='description' form='dash'></textarea><br><br>
<h4>Organiser</h4>
<input type='text' name='organiser'><br><br>
<h4>Speakers</h4>
<input type='text' name='speakers'><br><br>
<h4>image</h4>
<input type='text' name='image'><br><br>
<br><br>
<input type='submit' name='save'><br><br>
</form>
</div>

</body>
</html>";}
?>