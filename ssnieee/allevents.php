
<?php
include("navbar.php");
include("connection.php");
if(isset($_GET["q"])){
	$a=$_GET["q"];
}

if($a=="pastevents"){
$sql="SELECT * FROM past_events WHERE dates <= CURDATE() ORDER BY dates DESC";
$stmt = $db->prepare($sql);
$stmt->execute();
}
if($a=="upcomingevents"){
$sql="SELECT * FROM events WHERE dates > CURDATE() ORDER BY dates";
$stmt = $db->prepare($sql);
$stmt->execute();
}

$count = $stmt->rowcount();
$row_number = 0;

echo"<div class='container' style='min-height:100vh;'>";
echo "<br><br>";
while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
if ($row_number == 0){
                echo "<div class='container'>";
                echo "<div class='row'>";
                echo "<div class='card-deck'>";
            }
            
            echo   "<div class='card col-sm-3 mt-3 s3' style='width:17rem;'>";
            if($a=="pastevents"){
            echo "<a href='events.php?q=".$all['eno']."&p=".'past_events'."'>";
            }
            if($a=="upcomingevents"){
                echo "<a href='events.php?q=".$all['eno']."&p=".'events'."'>";
            }
            echo "<div class='card-body'>";
            
            echo "<h2 class='card-title mb-3' style=''>".$all['ename']." </h2>";
            echo "<h6 class='card-text mb-2' style='font-size:12px; color:grey'>".$all['organiser']."</h6>";
            echo "<p class='card-text' style='font-size:12px; color:grey'>".$all['dates']."</p>";
            
            echo "</div>";
            echo "</a>";
            echo "</div>";
            

                        
             if ($row_number > 0 && $row_number % 4 == 3){
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            $count=$count-1;
            if($count == 0){
            $b= $row_number % 4;
            for ($i=0;$i< 3-$b; $i++){
            	echo "<div class='col-sm-3 mt-3' style='width:17rem;'> </div>";
            }
        }
            $row_number = $row_number + 1;
            
            if ($row_number > 0 && $row_number % 4 == 0){
                echo "<div class='container'>";
                echo "<div class='row'>";	
                echo "<div class='card-deck'>";
            }
}

       if($a=="pastevents"){
       
     echo "  <div class='container text-center'style='min-width:80vw;min-height:90vh'>
    <p style='font-size: 60px; font-weight: bold;'> 2018 Events in a glance</p>
    <embed style='width:100%; height:100vh;' src='2018events.pdf' alt='2018events'></embed>
    </div>";

       } 
$db=null;
echo "</div>"
?>

<?php
include('cont.php')
?>