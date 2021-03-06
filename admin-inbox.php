
<?php

session_start();
    
  $title = "Admin Inbox";
  include "header.php";
  include "config.php";
    if(!$_SESSION["username"]) { 
      header('location: admin-login.php'); 
    }

  $sql = "SELECT * FROM admin_inbox;";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC); 

?>  

<div class="admin-inbox">
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
        </tr>
        <?php foreach($result as $data): ?>
        <tr>
            <td><?= $data["id"]; ?></td>
            <td><?= $data["first_name"]; ?></td>
            <td><?= $data["last_name"]; ?></td>
            <td><?= $data["email"]; ?></td>
            <td><?= $data["message"]; ?></td>
            <td><?= $data["time"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
  include "footer.php";
?>
