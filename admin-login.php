
<?php
  include "config.php";
  $title = "Admin";
  include "header.php";

  if(isset($_POST["submit"])) {

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    print_r($result);

    if(mysqli_num_rows($query) == 1) {
      session_start();
      $_SESSION['username'] = true;
      header('Location: admin-inbox.php');
    } 

  }

?> 

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="admin-login">
    <div>
        <h1>Log In</h1>
        <input type="text" name="username" placeholder="Enter Username" class="admin-login-input">
        <span></span>
        <input type="password" name="password" placeholder="Password" class="admin-login-input>
        <span></span>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </div>
</form>

<?php
  include "footer.php";
?>
