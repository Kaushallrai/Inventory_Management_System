<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventario | Login</title>
    <link rel="stylesheet" href="../css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <form action="../php/login.php" method="post" >
        <h1><img src="../inventory.png" />Inventario</h1>

        <h2>Login</h2>
        <p class="optimize"> Optimize inventory, achieve growth</p>
        <div class="form-group">
          <label for="email">Email *</label>
          <input
            type="email"
            id="email"
            name="email"
            
            placeholder="Enter your Email"
          />
        </div>
        <div class="form-group">
          <label for="password">Password *</label>
          <input
            type="password"
            id="password"
            name="password"
            
            placeholder="Enter your password"
          />
        </div>
<?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?> 

       

        <div class="link">
          <div class="remember">
            <input type="checkbox" id="remember-me" name="remember-me" />
            <label for="remember-me">Remember me</label>
          </div>
          <div>
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>
        </div>
        <div class="form-group">
          <input type="submit" value="Login" onclick="showLoading()" />
        </div>

          <div id="overlay">
    <div id="loader"></div>
  </div>

        <div class="or-divider">
          <hr class="or-divider-line" />
          <span class="or-divider-text">OR</span>
          <hr class="or-divider-line" />
        </div>
        <div class="google">
          <button class="google-button">
            Sign in with Google
            <img src="../icons/google.png" alt="google" />
          </button>
        </div>
      </form>
    </div>
<script src="../js/splash.js"></script>
  </body>
</html>
