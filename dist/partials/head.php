<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">

    <title>
        <?php 
   echo $title;
   
?>
    </title>

</head>

<body>
    <div class="page" id="page">
<?php 
    include ($_SERVER['DOCUMENT_ROOT'].'../assets/includes/config.php');
    include    "header.php ";
    include    "sidebar.php ";    
    include    "./assets/includes/_functions.php";    

?>
        <main class="main">
            <div class="container">
    