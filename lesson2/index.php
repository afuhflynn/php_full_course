<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Html Page</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
    </style>
</head>

<body>
    <?php 
        $name = "Dark Matter";
        $read = false;
        if ($read) {
            $message = "You have read " . $name;
        }else{
            $message = "You haven't read $name";
        }
        ?>
    <h1>
        <?php echo $message; ?>
        <!-- Short hand for <?php echo $var_name ?> -->
        <?= "hello, world" ?>
    </h1>
</body>

</html>