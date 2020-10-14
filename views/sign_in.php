<?php
    <form class="form_auth_style" style="
    display: grid;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
    width: 50%;
    border: 1px solid black;"action="./controllers/sign_in.php" method="POST" >
      <label align="center">Your Name</label>
      <input type="name" name="auth_name" placeholder="Your Name" required>
      <label align="center" >Your Password</label>
      <input type="password" name="auth_pass" placeholder="Your Password" required >
      <button class="form_auth_button" type="submit" name="form_auth_submit">Sign In</button>
    </form>
    <?php
    die;
}
?>