
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Registration</title>
</head>

<body>
  <div class="register">
    <h1>Register</h1>
    <?php if (isset($_GET['error'])) { ?>
      <div class="alert" role="alert">
        <?php echo $_GET['error']; ?>
      </div>
    <?php } ?>
    <form action="./php/signup.php" method="POST" class="form">
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="uname" placeholder="Name" id="username" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] :
       ""  ?>">
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="fname" placeholder="Last Name" id="username" value="<?php echo (isset($_GET['fname'])) ? $_GET['fname'] :
       ""  ?>">
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="pass" placeholder="Password" id="password" value="<?php echo (isset($_GET['pass'])) ? $_GET['pass'] :
         ""  ?>">
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="id" name="id" placeholder="id" id="password" value="<?php echo (isset($_GET['id'])) ? $_GET['id'] :
      ""  ?>">
      <label for="email">
        <i class="fas fa-envelope"></i>
      </label>
      <input type="text" name="email" placeholder="Email" id="email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] :
        ""  ?>">
        <input type="submit" value="Sign Up">
    </form>
  </div>
</body>

</html>