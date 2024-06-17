<?php
    $cookie_name = "profile";
    $cookie_value = "Alustina Suci Manah";
    setcookie($cookie_name, $cookie_value, time() + 60*60*24, "/");  // cookies aktif selama 1 hari
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie pada PHP</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie tidak ditemukan!";
        } else {
            echo '$_COOKIE['.$cookie_name.'] = '.$_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>