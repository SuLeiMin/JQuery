<?php
  require("server.php");
  if(isset($_POST['login'])){

    $kanriID = mysqli_real_escape_string($conn,$_POST['kanriID']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    /*
    $kanriID = $_POST['kanriID'];
    $password = $_POST['password'];
    $cppassword = $_POST['password'];
    */
    if(empty($kanriID)){
         $check_id = "入力してください。";
    }else {
        if(!filter_var($kanriID,FILTER_VALIDATE_EMAIL))
        {
          $check_id = "無効なメールアドレス";
        }
    }
     
    if(empty($password)){
        $check_password = "入力してください。";
    } else{
      if(strlen($password) < 4){
        $check_password = "your password must contain at least 4 characters";
      }
      elseif(!preg_match("#[0-9]+#", $password)){
        $check_password = "your password must contain at least 1 number";
      }
      elseif(!preg_match("#[A-Z]+#", $password)){
        $check_password = "your password must contain at least 1 Capital letter";
      }
      elseif(!preg_match("#[a-z]+#", $password)){
        $check_password = "your password must contain at least 1 LowerCase Letter";
      }
      elseif(!preg_match("#[\W]+#", $password)){
        $check_password = "your password must contain at least 1 Special Characters";
      }
      header("location:test.php");
    }  
    
    
  }
?>

<?php require('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
            	<br><br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        
                        管理者ID:<input type="email" name="kanriID" class="form-control" value="">
                        <br>
                            <?php if(isset($check_id)) { ?>
                                <p><?php echo $check_id ?></p>
                            <?php } ?>
                       
                    </div>
                    <div class="form-group ">
                        
                        パスワード: <input type="password" name="password" class="form-control" value="" >
                        <br>
                            <?php if(isset($check_password)) { ?>
                                <p><?php echo $check_password; ?></p>
                            <?php } ?>
                    </div>
                   
                    <input type="submit" class="btn btn-primary" name="login" value="ログイン">
                   <br><br>
                    <a href="welcome.php">パスワードを忘れた方はこちら</a>
                </form>
            </div>
        </div>    
    </div>
<?php require('footer.php'); ?>