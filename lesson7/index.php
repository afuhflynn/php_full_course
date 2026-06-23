<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Getting user input</title>
</head>

<body>
  <?php
 $name =  $_GET["name"];
 echo $name;
  ?>

  <form action="./lesson7" method="get">
    <input type="text" name="name" placeholder="Your name here" />
    <button type="submit">Submit</button>
  </form>
</body>

</html>
