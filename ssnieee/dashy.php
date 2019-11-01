<?php
session_start();
if(isset($_GET["q"])){
	$a=$_GET["q"];
}
?>
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
if($_SESSION["dashy"]=="honeypee"){

if($a=='future'){
echo"<div class='container'>
	<h1>FUTURE EVENTS DASHBOARD</h1>";

include("connection.php");
    $sql="SELECT * FROM events";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
   echo" <table class='table'>
  <thead>
    <tr>
      <th scope='col'>sno</th>
      <th scope='col'>date</th>
      <th scope='col'>event name</th>
    </tr>
  </thead>
    <tbody>";
while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
   echo"<tr>
      <td>".$all['eno']."</td>
      <td>".$all['dates']."</td>
      <td>".$all['ename']."</td>
    </tr>";}
    echo"  </tbody>
</table>";
	$db=null;
	$_SESSION["ins"]="fut";
    
echo"<form action='delete.php' id='dash' method='post'>
	<input type='text' placeholder='enter sno' name='delete'>
<input type='submit' value='delete'>
</form>

<br><br>
<form action='insert.php' id='futdash'method='post'>
<h4>event name</h4>
<input type='text' name='ename'><br><br>
<h4>date</h4>
<input type='date' name='dates'><br><br>
<h4>No. of Participants</h4>
<input type='number' name='nop'><br><br>
<h4>Description</h4>
for new line use - &ltbr&gt <br>
paragraphs should be placed in between &ltp&gt and &lt/p&gt tags 
<textarea rows='25' cols='150' name='description' form='futdash'></textarea><br><br>
<h4>Organiser</h4>
<input type='text' name='organiser'><br><br>
<h4>Speakers</h4>
<input type='text' name='speakers'><br><br>
<h4>image</h4>
<input type='text' name='image'><br><br>
<br><br>

<input type='submit' name='save'><br><br>
</form>
</div>";}

if($a=='past'){
echo"<div class='container'>
  <h1>PAST EVENTS DASHBOARD</h1>";

include("connection.php");
    $sql="SELECT * FROM past_events";
    $stmt = $db->prepare($sql);
    $stmt->execute();
   echo" <table class='table'>
     <thead>
    <tr>
      <th scope='col'>sno</th>
      <th scope='col'>date</th>
      <th scope='col'>event name</th>
    </tr>
  </thead>
    <tbody>";
while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
   echo"<tr>
      <td>".$all['eno']."</td>
      <td>".$all['dates']."</td>
      <td>".$all['ename']."</td>
    </tr>";}
    echo"  </tbody>
</table>";
  $db=null;
  $_SESSION["ins"]="past";
    
echo"<form action='delete.php' id='dash' method='post'>
  <input type='text' placeholder='enter sno' name='delete'>
<input type='submit' value='delete'>
</form>

<br><br>
<form action='insert.php' id='futdash'method='post'>
<h4>event name</h4>
<input type='text' name='ename'><br><br>
<h4>date</h4>
<input type='date' name='dates'><br><br>
<h4>No. of Participants</h4>
<input type='number' name='nop'><br><br>
<h4>Description</h4>
for new line use - &ltbr&gt <br>
paragraphs should be placed in between &ltp&gt and &lt/p&gt tags 
<textarea rows='25' cols='150' name='description' form='futdash'></textarea><br><br>
<h4>Organiser</h4>
<input type='text' name='organiser'><br><br>
<h4>Speakers</h4>
<input type='text' name='speakers'><br><br>
<h4>image</h4>
<input type='text' name='image'><br><br>
<br><br>

<input type='submit' name='save'><br><br>
</form>
</div>";}


if($a=='news'){
echo"<div class='container'>
  <h1>NEWS DASHBOARD</h1>";

include("connection.php");
    $sql="SELECT * FROM news";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
   echo" <table class='table'>
  <thead>
    <tr>
      <th scope='col'>sno</th>
      <th scope='col'>date</th>
      <th scope='col'>news</th>
      <th scope='col'>link</th>
    </tr>
  </thead>
    <tbody>";
while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
   echo"<tr>
      <td>".$all['sno']."</td>
      <td>".$all['dates']."</td>
      <td>".$all['description']."</td>
      <td>".$all['link']."</td>
    </tr>";}
    echo"  </tbody>
</table>";
  $db=null;
  $_SESSION["ins"]="news";
    
echo"<form action='delete.php' id='dash' method='post'>
  <input type='text' placeholder='enter sno' name='delete'>
<input type='submit' value='delete'>
</form>

<br><br>
<form action='insert.php' id='futdash'method='post'>
<h4>date</h4>
<input type='date' name='dates'><br><br>
<h4>Description</h4>
for new line use - &ltbr&gt <br>
paragraphs should be placed in between &ltp&gt and &lt/p&gt tags 
<textarea rows='25' cols='150' name='description' form='futdash'></textarea><br><br>
<h4>Link</h4>
<input type='text' name='link'><br><br>

<input type='submit' name='save'><br><br>
</form>
</div>";}

if($a=='members'){
echo"<div class='container'>
  <h1>MEMBERS DASHBOARD</h1>";

include("connection.php");
    $sql="SELECT * FROM members";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
   echo" <table class='table'>
  <thead>
    <tr>
      <th scope='col'>rollno</th>
      <th scope='col'>name</th>
      <th scope='col'>year</th>
      <th scope='col'>dept</th>
      <th scope='col'>ieee id</th>
      <th scope='col'>email</th>
      <th scope='col'>cont</th>
      <th scope='col'>yop</th>
      <th scope='col'>flag</th>
    </tr>
  </thead>
    <tbody>";
while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
   echo"<tr>
      <td>".$all['rollno']."</td>
      <td>".$all['name']."</td>
      <td>".$all['year']."</td>
      <td>".$all['dept']."</td>
      <td>".$all['memid']."</td>
      <td>".$all['email']."</td>
      <td>".$all['cont']."</td>
      <td>".$all['yop']."</td>
      <td>".$all['flag']."</td>
    </tr>";}
    echo"  </tbody>
</table>";
  $db=null;
  $_SESSION["ins"]="members";

echo"<form action='delete.php' id='dash' method='post'>
  <input type='text'  placeholder='enter ieee mem number' name='delete'>
<input type='submit' value='delete'>
</form>";    
echo"";}

}
?>


</body>
</html>