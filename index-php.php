<?php

include 'Array.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dischi</title>
</head>
<body>
    <header>
        <img src="https://cdn.smehost.net/michaeljacksoncom-uslegacyprod/wp-content/uploads/2016/01/michael-jackson20091.png" alt="Michael Jackson">
        <h1>Michael Jackson - official web site</h1>
    </header>
    <main>
        <h2>Alcuni dei sui dischi più venduti e più famosi:</h2>
        <div class="container">
            <div class="row">
                <?php foreach($dischi as $cover){ ?>
                <div class="box">
                    <img src="<?php echo $cover['poster'] ?>" alt="<?php echo $cover['title'] ?>">
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>