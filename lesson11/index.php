<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Html Page</title>
</head>

<body>
  <form action="lesson11" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br />
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br />
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br />
    Banana: <input type="checkbox" name="fruits[]" value="banana"><br />
    <button type="submit">Submit</button>
  </form>

  <?php
  echo $_POST["fruits"][0];
  ?>
</body>

</html>
