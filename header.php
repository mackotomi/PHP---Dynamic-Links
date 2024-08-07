<?php
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$active_path = basename($path);
echo "The requested URI is: " . htmlspecialchars($active_path);

function dd(){
   echo '<pre>';
   print_r($_SERVER);
   echo '</pre>';
   die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>

<div class='navigation'>
   <ul>
    <li><a href="index.php" <?= $active_path === 'index.php'? "class='active__link'" : '' ?>>Home</a></li>
    <li><a href="contact.php" <?= $active_path === 'contact.php' ? "class='active__link'" : '' ?>>Contact</a></li>
    <li><a href="about.php" <?= $active_path  === 'about.php' ? "class='active__link'" : '' ?>>About</a></li>
    <li><a href="portfolio.php" <?= $active_path === 'portfolio.php' ? "class='active__link'" : '' ?>>Portfolio</a></li>
   </ul>
</div>