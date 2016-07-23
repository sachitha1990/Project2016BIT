<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Right Technology Login Form</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/login_style.css"/>
</head>

<body>

  <hgroup>
    <img src="<?= base_url(); ?>/assets/img/2.png">
  </hgroup>
  <form action="<?php echo site_url('login_controller/process');?>" method="post" name="process">
    <?php if(! is_null($msg)) echo $msg;?>
    <div class="group">
      <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
      <label>User Name</label>
    </div>
    <div class="group">
      <input type="password" Name="password"><span class="highlight"></span><span class="bar"></span>
      <label>Password</label>
    </div>
    <button type="submit" class="button buttonBlue">Enter
      <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
  </form>
  <footer><a href="http://www.amis.lk/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
    <p>You Gotta Love <a href="http://www.amis.lk" target="_blank">AMiS Web Solutions</a></p>
  </footer>
  <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>

  <script src="<?= base_url(); ?>/assets/js/index.js"></script>




</body>
</html>
