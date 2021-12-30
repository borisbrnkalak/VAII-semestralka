    <a href="#parallax" class="scrollup" id="scroll-up">
      <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>

    <div class="modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>LOGIN</h1>
      <div class="err log" disabled>
        <p></p>
      </div>
      <form action="services/login.php" method="POST" class="modal__form log">
        <input name="login-email" type="text" class="username" placeholder="email" value="borisbrnkalak@gmail.com">
        <input name="login-password" type="password" class="password" placeholder="password" value="aaaa">
        <input type="text" class="error-message-login" disabled value="<?php /*echo $_SESSION['login-result'] */?>">
        <button type="submit" name="submit-btn" class='btn'>Done</button>
      </form>

      

      <div class="register-now">
        <p>No account? Don't worry, you can <a class="register-btn" href="#">register</a> now!</p>
      </div>
    </div>

    <div class="register modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h1>REGISTER</h1>
      <div class="err reg" disabled>
        <p></p>
      </div>
      <form action="services/register.php" method="POST" class="modal__form reg">
        <input name="register-name" type="text" class="fullname" placeholder="Full name">
        <input name="register-email" type="text" class="username" placeholder="Username(email)">
        <input name="register-password" type="password" placeholder="password atleast(6 chars)" class="password">
        <input name="register-confirm-password" type="password" placeholder="confirm-password" class="confirm-password">
        <input type="text" class="error-message-register" value="<?php/* echo $_SESSION['register-result']*/ ?>" disabled>
        <button type="submit" name="register-btn" class='btn'>Done</button>
      </form>

    </div>

    <div class="overlay hidden"></div>