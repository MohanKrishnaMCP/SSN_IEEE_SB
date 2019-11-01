<?php
session_start();
if(isset($_POST['delete'])){
      $del=$_POST['delete'];
    }
include("connection.php");
if($_SESSION["ins"]=="fut"){
$sql="SELECT * FROM events";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "DELETE FROM events WHERE eno = '$del'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
}
if($_SESSION["ins"]=="past"){
$sql="SELECT * FROM past_events";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "DELETE FROM past_events WHERE eno = '$del'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
}
if($_SESSION["ins"]=="news"){
$sql="SELECT * FROM news";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "DELETE FROM news WHERE sno = '$del'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
}
if($_SESSION["ins"]=="members"){
$sql="SELECT * FROM members";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "DELETE FROM members WHERE memid = '$del'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
}
?>