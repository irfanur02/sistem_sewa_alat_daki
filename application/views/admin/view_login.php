<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
   <div class="container">
          <h1>Login</h1>
          <form action="<?php echo base_url('Login/authAdmin'); ?>"method="post">
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>          
                <button type=submit >Log in</button><br><br>
                <center><a href="<?=base_url('DaftarAdmin')?>" class="btn btn-success">Registrasi</a></center>
            </form>
        </div>       
</body>
</html>