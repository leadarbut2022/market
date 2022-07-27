<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once "$root/account/handling/main.php"; 
?>

<!DOCTYPE html>

<html>

<head>
  <?php require "$root/parts/head.html"; ?>
  <title>themarket | administration</title>
</head>

<body>
  <a name="home"></a>
  <?php require "$root/parts/navbar.php"; ?>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center">users table</h1>

        <?php
          $attribute = key($_GET);
          $value = $_GET[$attribute];

          $users = getUsers($attribute, $value);
          closeConnection();
          displayUsersTable($users);
        ?>
      </div><!-- /col -->
    </div><!-- /row -->
  </div><!-- /container -->

  <?php require "$root/parts/footer.html"; ?>
  
  <?php require "$root/parts/scripts.html"; ?>
</body>

</html>