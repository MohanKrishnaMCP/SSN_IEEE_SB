<?php
include('navbar.php')
?>

<style>
	body{
		position: relative;
		min-height: 100vh;
	}
</style>

<body>
	<br><br>
	<p style="text-orientation: upright;text-align: center; letter-spacing: 5px; font-size: 35px; color:#1088F2/*#F26910*/;"> Enroll With SSN IEEE </p>
<form action="enrollinsert.php" method="post" class="text-center" style="font-family: Open Sans">

<input type="text" class="frm" name="name" placeholder="name"><br>
<input type="number" class="frm" name="year" placeholder="year"><br>
<input type="text" class="frm" name="dept"  placeholder="department">
<input type="number" class="frm" name="rollno"  placeholder="roll no">
<input type="number" class="frm" name="memid" placeholder="IEEE membership id"><br>
<input type="text" class="frm" name="email" placeholder="email"><br>
<input type="number" class="frm" name="cont"  placeholder="mobile number"><br>
<input type="number" class="frm" name="yop"  placeholder="year of pass out"><br>
<input type="submit" class="bbox1" name="submit" value="Submit">
</form>
<!-- <br><br> -->
</body>

<?php
include('cont.php')
?>