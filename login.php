<?php
require_once('db\connect.php');
if(!empty($_POST)){
    $account = $_POST['account'];
    $password = $_POST['password'];
    
    $sql = "select * from role where account = '$account' and password = '$password'";
    
    $result=executeResult($sql, true);
    
    if( $result != null) {
		
		header('Location: admin.php');
		die();
	}
        
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./fiecss/login.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='./fontawesome-free-6.1.1-we   ib/fontawesome-free-6.1.1-web/css/all.min.css'>
    <script src='main.js'></script>
    <style>
        body {
            background-image: url("./img/imglogin/anhnen.png");
        }
        </style>
</head>
<body>  
    <div class="form-login-table">
        <div class="form-img"><img src="img\imglogin\team.jpg" alt=""></div>
        <div class="form-login">
    <h1>login</h1>
    <form action="" method="POST">
    <label for="">tài khoản :</label><br>
    <input type="text" name="account" id=""><br>
    <label for="">password:</label><br>
    <input type="password" name="password" id=""><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
</body>
</html>
#   d u - a n - c h o i  
 