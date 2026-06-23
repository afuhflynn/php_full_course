<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array of Arrays and Associative Arrays</title>
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

    li {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php 
        $books = [
            [
                "name" => "Lake of Zaras",
                "author" => "JohnDoe",
                "url" => "https://johndoe.com"
            ],
            [
                "name" => "The Lion King", 
                "author" => "Arries",
                "url" => "https://arries.com"
            ],
            [
                "name" => "The Lost Civilization", 
                "author" => "Flynn",
                "url" => "https://flynn.com"
            ],
            [
                "name" => "The Quote of Ozz",
                "author" => "FaithFrancis",
                "url" => "https://faithfrancis.com"
            ]
         ];

         function countList()
{
if (func_num_args() == 0) {
return false;
}
else {
$count = 0;
for ($i = 0; $i < func_num_args(); $i++) {
$count += func_get_arg($i);
}
return $count;
}
}
echo countList(1, 5, 9); // outputs "15"
    ?>

    <ul>
        <?php foreach($books as $book) : ?>
        <li>
            <a href="<?=$book["url"] ?>">
                <?= $book["name"] ?>-<?= $book["author"] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>