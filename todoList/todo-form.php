<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="todo-script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>To Do List</title>
</head>
<body>
<div class="container">
        <h1 class="row">
          &nbsp;&nbsp;&nbsp;
          TODO APP
          &nbsp;&nbsp;&nbsp;
        </h1>
        <br/><br/>
        <div class="row">
            <form class="form-inline col-sm-offset-3">
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-pencil"></i>
                    </span>
                    <input type="text" class="form-control"
                           placeholder="todo-item"
                           id="box" style="width: 30vw" />
                </div>
                <div class="form-group">
                    <input type="button"
                           class="btn btn-primary form-control"
                           value="add" style="width: 10vw"
                           onclick="add_item()" />
                </div>
            </form>
        </div>
        <div class="row">
            <ul id="list_item">
            </ul>
        </div>
    </div>
</body>
</html>