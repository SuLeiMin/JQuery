<?php 
  include('connection.php');
  $query= "SELECT * FROM userlist";
  $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>契約作業一覧</title>
    <link href="style.css" rel="stylesheet">
    <style type="text/css">
      table,th,td{
        text-align: center;
        border: 2px solid black;
        padding: 9px;
     }
    </style>
</head>
<body>
<body>
  <center><h1>契約作業一覧</h1></center>
  <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <table>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>postoffice</th>
                    <th>Address1</th>
                    <th>Address2</th>
                    <th>Telephone</th>
                    <th>Department1</th>
                    <th>Department2</th>
                </tr>
                <?php 
                    while($row = mysqli_fetch_assoc($result))
                { ?>
                   <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['postoffice']; ?></td>
                        <td><?php echo $row['address1']; ?></td>
                        <td><?php echo $row['address2']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['department1']; ?></td>
                        <td><?php echo $row['department2']; ?></td>
                    </tr>
                <?php } ?>
         
          </div>
        </div>
     </div>
</body>
</html>