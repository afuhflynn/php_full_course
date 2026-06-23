<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <?php
    $name = "John";
    $age = 35;

    $user = [$name => "John", $age => 35];
    echo $user->$name;
  ?>

  <?php
    echo "<h1>There once was a man named {$name} <br /> </h1>";
    echo "<h1>He was {$age} years old <br /> </h1>";
    echo "<h1>He really liked the name {$name} <br /> </h1>";
    echo "<h1>But didn't like being {$age} <br /> </h1>";
    ?>
</body>

</html>
