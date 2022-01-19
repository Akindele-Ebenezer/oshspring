
<?php
  $title = "Admin";
  include "header.php";
  include "config.php";

  if(isset($_POST["submit"])) {

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    $sql = "SELECT * FROM admin WHERE username = 'admin' AND password = 'adminkemi123';";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
      session_start();
      $_SESSION["username"] = true;
      header('location: admin-inbox.php');
    } 

  }

?>
<style>
  .admin-login {
    display: flex;
    justify-content: center;
    padding: 5rem;
  }

  .admin-login h1 {
    color: var(--yellow);
  }
</style>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="admin-login">
    <div>
        <h1>Log In</h1>
        <input type="text" name="username" placeholder="Enter Username">
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
