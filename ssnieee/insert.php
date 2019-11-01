<?php
session_start();
include("connection.php");
if($_SESSION["ins"]=="fut"){
    $sql="SELECT * FROM events";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['ename'])){
      $ename=$_POST['ename'];
    }
        if(isset($_POST['dates'])){
      $dates=$_POST['dates'];
    }
        if(isset($_POST['nop'])){
      $nop=$_POST['nop'];
    }
        if(isset($_POST['organiser'])){
      $organiser=$_POST['organiser'];
    }
        if(isset($_POST['speakers'])){
      $speakers=$_POST['speakers'];
    }
        if(isset($_POST['image'])){
      $image=$_POST['image'];
    }
     if(isset($_POST['description'])){
      $description=$_POST['description'];
    }

        $sql = "INSERT INTO events(eno, ename, dates, nop, description,organiser, speakers, image)
        VALUES ('','".$ename."','".$dates."','".$nop."','".$description."','".$organiser."','".$speakers."','".$image."')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
      }

if($_SESSION["ins"]=="past"){
    $sql="SELECT * FROM past_events";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);
    $eno = $stmt->rowcount();
    $eno=$eno+1;

    if(isset($_POST['ename'])){
      $ename=$_POST['ename'];
    }
        if(isset($_POST['dates'])){
      $dates=$_POST['dates'];
    }
        if(isset($_POST['nop'])){
      $nop=$_POST['nop'];
    }
        if(isset($_POST['organiser'])){
      $organiser=$_POST['organiser'];
    }
        if(isset($_POST['speakers'])){
      $speakers=$_POST['speakers'];
    }
        if(isset($_POST['image'])){
      $image=$_POST['image'];
    }
     if(isset($_POST['description'])){
      $description=$_POST['description'];
    }

        $sql = "INSERT INTO past_events(eno, ename, dates, nop, description,organiser, speakers, image)
        VALUES ('','".$ename."','".$dates."','".$nop."','".$description."','".$organiser."','".$speakers."','".$image."')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
      }


if($_SESSION["ins"]=="news"){
    $sql="SELECT * FROM news";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);
    $eno = $stmt->rowcount();
    $eno=$eno+1;

    if(isset($_POST['link'])){
      $link=$_POST['link'];
    }
        if(isset($_POST['dates'])){
      $dates=$_POST['dates'];
    }
     if(isset($_POST['description'])){
      $description=$_POST['description'];
    }

        $sql = "INSERT INTO news(sno,dates, description,link)
        VALUES ('','".$dates."','".$description."','".$link."')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
      }
?>