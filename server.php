<?php
    $paragraph = $_GET['paragraph'];
    $badWord = $_GET['badWord'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
    <h1><?php echo $paragraph; ?> <?php echo strlen($paragraph); ?></h1>
    <p><?php echo str_replace($badWord,'***',$paragraph);?> </p>
</body>
</html>