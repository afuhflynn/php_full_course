<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <form action="index.php" method="post">
    Password: <br /> <input type="password" name="password" placeholder="********" />

    <button type="submit">Submit</button>
  </form>
  <br />
  <?php
  // echo $_SERVER;
  // echo $_POST["password"];

  foreach ($_ENV as $en) {
    echo $en;
  }
    ?>
</body>

</html>
