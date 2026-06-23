<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <form action="lesson8" method="get" style="display: flex; flex-direction: column; gap: 0.6rem; width: 20%">
    <input type="text" name="color" placeholder="Color here" />
    <input type="text" name="pluraNoun" placeholder="Plura noun here" />
    <input type="text" name="celebrity" placeholder="Celebrity here" />
    <button type="submit">Submit</button>
  </form>

  <br />
  <br />

  <?php
  $color = $_GET["color"];
  $pluraNoun = $_GET["pluraNoun"];
  $celebrity = $_GET["celebrity"];

  if($color && $pluraNoun && $celebrity){
    echo "Roses are {$color} <br />";
    echo "{$pluraNoun} are blue <br />";
    echo "I love {$celebrity} <br />";
  }
   ?>
</body>

</html>
