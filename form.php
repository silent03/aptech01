<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <div class="container">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter your Name">
   </div>
   <input type="submit" value="Submit" class ="btn btn-dark">
  </form>

  <?php

//echo $_REQUEST['name'];

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    echo $_POST['name'];
  }
  ?>
</body>
</html>