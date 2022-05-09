<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE userlist set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', postoffice='" . $_POST['postoffice'] . "', address1='" . $_POST['address1'] . "' ,address2='" . $_POST['address2'] . "',phone='" . $_POST['phone'] . "',department1='" . $_POST['department1'] . "'
	department2='" . $_POST['department2'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM userlist WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
PostOffice :<br>
<input type="text" name="postoffice" class="txtField" value="<?php echo $row['postoffice']; ?>">
<br>
Address1:<br>
<input type="text" name="address1" class="txtField" value="<?php echo $row['address1']; ?>">
<br>
Address2:<br>
<input type="text" name="address2" class="txtField" value="<?php echo $row['address2']; ?>">
<br>

Phone:<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Department1:<br>
<input type="text" name="department1" class="txtField" value="<?php echo $row['department1']; ?>">
<br>
Department2:<br>
<input type="text" name="department2" class="txtField" value="<?php echo $row['department2']; ?>">
<br>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>