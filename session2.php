<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session pada PHP - Hal 2</title>
</head>
<body>
    <?php
    // $_SESSION['name'] = null;
        if(isset($_SESSION['name']))
            echo 'Halo, '.$_SESSION['name'];
        else
            echo 'Tidak ada data pada session!';
    ?>
</body>
</html>