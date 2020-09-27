<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  
</head>

<body>
  <div class="form">
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Login Admin</h1>
          
          <form action="<?php echo base_url();?>index.php/admin" method="post">
          
          <div class="field-wrap">
          
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="username" id="username">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" id="password">
          </div>
          
          <button type="submit" class="button button-block"/>Login</button><br>
          </form>
          <a href="<?php echo base_url()?>/index.php"><button class="button button-block">Batal</button></a>
          
          

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="<?php echo base_url();?>index.php/admin" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="on"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="on"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Login</button>

          <button class="button button-block" value="Cancel"><a href="<?php echo base_url()?>/index.php">Batal</a></button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>assets/js/index.js"></script>

</body>
</html>
