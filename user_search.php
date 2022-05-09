<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Radio</title>
</head>
<body>
    <body>
  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <label>
        <input type="radio" name="radio" value="Lock & Key">Lock & Key
        <span class="select"></span>
      </label>
      
      <input type="submit" name="submit" vlaue="Get Values">
    </form>
    <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['radio'])) {
          echo '  ' . $_POST['radio'];
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
  </div>
</body>
</html>