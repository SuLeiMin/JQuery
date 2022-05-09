<?php 
  include('server.php');
  $query= "SELECT * FROM userlist";
  $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>契約作業一覧</title>
    
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
    .link {
        float: right
     
        }
    </style>
</head>
<body>
<body>
  <center><h1>契約作業一覧</h1></center>
   <form action="" method="POST" >
    <div class="input-group mb-3">
        <input type="text" name="search" value="" class="form-control" placeholder="Search" >
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </form>
  <br>
  <div>
    <?php
        if (mysqli_num_rows($result) > 0) {
            $i=0;
            while($row = mysqli_fetch_array($result)) {
    ?>
        <button onclick="location.href='register.php?id=<?php echo $row["id"]; ?>'">登録</button>
    <?php
        $i++;
        } 
    }
    ?>
        <button onclick="location.href='register.php'">編集</button>
        <button onclick="location.href='register.php'">削除</button>
        
  </div>
　<div class="link">
        <a href="" onclick="Export()">データ出力</a>
  </div>
   <script>
        function Export()
        {
            var conf = confirm("Export users to CSV?");
            if(conf == true)
            {
                window.open("createcsv.php", '_blank');
            }
        }
    </script>
  <br>
  <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>PostOffice</th>
                                    <th>Address1</th>
                                    <th>Address2</th>
                                    <th>Phone</th>
                                    <th>Department1</th>
                                    <th>Department2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include('connection.php');

                                    if(isset($_POST['search']))
                                    {
                                        $filtervalues = $_POST['search'];
                                        $query = "SELECT * FROM userlist WHERE name LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><input type="radio" name="<?php $items['id'] ?>" value="<?php $items['id'] ?>" ?></td>
                                                    <td><?= $items['id']; ?> </td>
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
                                        }else
                                        { ?>
                                                <tr>
                                                    <td colspan="9">Searched Data did not Found</td>
                                                </tr>
                                        <?php } 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>