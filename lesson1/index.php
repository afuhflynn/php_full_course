<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Html Page</title>
</head>

<body>
    <?php 
        $name = "Dark Matter";
        $read = false;

        if($read){
            $message = "You have read: $name";
        }else{
            $message = "You haven't read: $name";
        }
    ?>
    <h1>
        <?php 
            $greeting = "Hello, ";
            // echo $greeting . "Everybody";
            // or we could write
            // echo "$greeting Everybody"; // Using single quotes produces ($greeting Everybody)

            echo "$message";
        ?>
    </h1>
</body>

</html>