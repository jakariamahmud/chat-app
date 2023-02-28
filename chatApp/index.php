<?php include_once "header.php";?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Welcome To You!</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="field input">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Enter Your Email" required>
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input class="ps" type="password" name="password" placeholder="Enter New Password" required>
          <i class="fas fa-eye"></i>

        </div>
        <div class="field image">
          <label for="">Select Your Picture</label>
          <input type="file" name="image"  required>
        </div>
        <div class="field  button">
          <input type="submit" value="Continue to Chat" >
        </div>
      </form>
      <div class="link">Already Signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javaScript/pass-show-hide.js"></script>
  <script src="javaScript/signup.js"></script>
</body>
</html>