<!DOCTYPE html>

<?php
if(isset($_GET["q"])){
  $a=$_GET["q"];
  $b=$_GET["p"];
  }
include("navbar.php");
include("connection.php");
if($b=='past_events'){
$sql="SELECT * FROM past_events WHERE eno='".$a."'";
$stmt = $db->prepare($sql);
$stmt->execute();
$all = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<br><br><br><br><br>";
}
if($b=='events'){
	$sql="SELECT * FROM events WHERE eno='".$a."'";
$stmt = $db->prepare($sql);
$stmt->execute();
$all = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<br><br><br><br><br>";
}
?>

<div class="container text-center">
<h1><?php echo $all['ename'] ;?> </h1>
<p style="color:grey;"><?php echo $all['dates'];?>
	<br>
	Organised by: <?php echo $all['organiser'];?>
</p>
<img src="<?php echo $all['image']; ?>">
<p style="text-align: justify;"><?php echo $all['description'];?>
</p>

</div>
<?php
include('cont.php')
?>