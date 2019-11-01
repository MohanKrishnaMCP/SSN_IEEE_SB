<?php
include("connection.php");
    $sql="SELECT * FROM members";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
    $all = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['rollno'])){
      $rollno=$_POST['rollno'];
    }

    if(isset($_POST['name'])){
      $name=$_POST['name'];
    }
        if(isset($_POST['year'])){
      $year=$_POST['year'];
    }
        if(isset($_POST['dept'])){
      $dept=$_POST['dept'];
    }
        if(isset($_POST['memid'])){
      $memid=$_POST['memid'];
    }
        if(isset($_POST['email'])){
      $email=$_POST['email'];
    }
        if(isset($_POST['cont'])){
      $cont=$_POST['cont'];
    }
        if(isset($_POST['yop'])){
      $yop=$_POST['yop'];
    }
    $flag =0;

        $sql = "INSERT INTO members(rollno, name, year, dept, memid, email, cont, yop, flag)
        VALUES ('".$rollno."','".$name."','".$year."','".$dept."','".$memid."','".$email."','".$cont."','".$yop."','".$flag."')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
?>