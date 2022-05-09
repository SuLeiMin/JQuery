

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
      table,th,td{
        text-align: center;
        border: 2px solid black;
        padding: 9px;
        width: 1200px;
     }
     btn_search{
        margin-left: 20px;
     }
    </style>
</head>
<body>	
		<form action="user_search.php" method="post" class="btn_search" > 
	        <input type="text" name="search" placeholder="Search">
	        <input type="submit" name="search" value="検査">
  		</form>
  		<br>
	  	<table >
	  		<tr>
	  			<th>ID</th>
	  			<th>Name</th>
	  			<th>PostOffice</th>
	  			<th>Address1</th>
	  			<th>Address2</th>
	  			<th>Phone</th>
	  			<th>Department1</th>
	  			<th>Department2</th>
	  		</tr>
	  		 <?php 
                                    include('connection.php');

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM userlist WHERE name LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['postoffice']; ?></td>
                                                    <td><?= $items['address1']; ?></td>
                                                    <td><?= $items['address2']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['department1']; ?></td>
                                                    <td><?= $items['department2']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
	  		
	  	</table>

</body>
</html>

