<?php
  $title = "Admin";
  include "header.php";
?>

<form action="<?= $_SERVER['PHP _SELF'] ?>" method="get" class="admin-login">
    <div>
        <h1>Log In</h1>
        <input type="text" name="email" placeholder="Email">
        <span></span>
        <input type="password" name="password" placeholder="Password">
        <span></span>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </div>
</form>

<?php
  include "footer.php";
?>
