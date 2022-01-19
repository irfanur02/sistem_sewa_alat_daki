<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Registrasi</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
   <div class="container">
          <h1>Registrasi</h1>
          <form action="<?php echo base_url('DaftarAdmin/storeAdmin'); ?>"method="post">
                <label>Username</label><br>
                <input type="text" name="username"><br>
                 <label>Password</label><br>
                <input type="password" name="password"><br>
                <button type=submit >Daftar</button>
            </form>
        </div>       
</body>
</html>