<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <form action="lesson12" method="post">
    <input type="text" name="student">

    <button type="submit">Submit</button>
  </form>
  <?php
    // Associative arrays in php: Are a collection of key value pairs
    $grades = array("Flynn" => "A+", "FaithFrancis" => "A++");

    echo $grades[$_POST["student"]];
    ?>
</body>

</html>
