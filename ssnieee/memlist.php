<?php
include('navbar.php');
echo"<br><br>";
include("connection.php");
    $sql="SELECT * FROM members";
    $stmt = $db->prepare($sql);                                   
    $stmt->execute();
   echo" <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Rollno</th>
      <th scope='col'>Name</th>    
      <th scope='col'>IEEE id</th>
      <th scope='col'>Email id</th>
    </tr>
  </thead>
    <tbody>";
while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
   echo"<tr>
      <td>".$all['rollno']."</td>
      <td>".$all['name']."</td>
      <td>".$all['memid']."</td>
      <td>".$all['email']."</td>
    </tr>";}
    echo"  </tbody>
</table>";
?>