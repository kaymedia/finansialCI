<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="PT Lampung Jaya Abadi">
      <meta name="author" content="kaymedia ">
      <link href="<?php echo base_url()?>/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url()?>/css/signin.css" rel="stylesheet">
      <title>Login to PT Lampung Jaya Abadi</title>
</head>
<body>
 <div class="container">
 <div class="col-md-4">
<?php echo form_open("auth/cek_user"); ?>
		<h2 class="form-signin-heading"><center><font color="white">PT Lampung Jaya Abadi </center></h2>
          
            <input name="username" id="username" type="input" class="form-control" placeholder="Username" required autofocus>
            <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
            <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
           </label>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Masuk</button></font>
      </br>
</center>
		<?php echo form_close(); ?>
</body>
</html>
