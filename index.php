<?php
$title = "Hello, PHP!";
$author = "Simon";
$body = "This is a simple PHP page.";
$pageTitle = "My PHP Page";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5"><?php echo $title; ?></h1>
        <h2 class="mt-3">By <?php echo $author; ?></h2>
        <p class="lead"><?php echo $body; ?></p>
    </div>
</body>

</html>