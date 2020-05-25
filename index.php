
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lieu Minh Tri</title>
  <style>
    input{display:block; margin-bottom:10px;}
  </style>
</head>

<body>
  <p style="color:red; font-size:100px">Lieu Minh Tri</p>
  <a href=setup.php>Create Database</a>
  <br> <a href=createtable.php>Create Table</a>
  <br> <a href = add_account.php>Add account</a>
  <br> <a href =list_account.php>Account List</a> <br>
  <h2>Nhap ten cua ban</h2>
  
  <form action="index.php" method="post">
    <label for="first_name">Ho:</label>
    <input name="first_name" id="first_name" type="text" />
    
    <label for="last_name">Ten:</label>
    <input name="last_name" id="last_name" type="text" />
    
    <label for="email">Email:</label>
    <input name="email" id ="email" type="text" />

    <input type="hidden" name="process" value="1" />
    <input type="submit" value="Submit" />  
</form>
</body>
</html>

<?php
  if ($_POST['process'] == 1) {    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    if (empty($first_name) && empty($last_name)){
      echo "Xin chao, nguoi la";
    }else{
      echo "Chao ban, ".$first_name." ".$last_name. ", email cua ban la: " .$email;
    }
  }
?>
