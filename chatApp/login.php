<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
  include_once "header.php";?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Welcome To You!</header>
      <form action="#">
        <div class="error-text"></div>
        <div class="field input">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Enter Your Email">
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input class="ps" type="password" name="password" placeholder="Enter your Password">
          <i class="fas fa-eye"></i>
        </div>

        <div class="field  button">
          <input type="submit" value="Login" >
        </div>
      </form>
      <div class="link">Not yet Signed Up? <a href="index.php">SignUp now</a></div>
    </section>
  </div>
  <script src="javaScript/pass-show-hide.js"></script>
  <script src="javaScript/login.js"></script>
</body>
</html>