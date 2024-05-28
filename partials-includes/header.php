<?php
require 'config/database.php';

// fetch current users from database
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard using HMTL, CSS & JavaScript</title>
    <!--STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <!-- MATERIALIZE ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- GOOGLE FONT (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- START NAV-->
    <nav>
        <div class="container">
            <img src="./images/logo.png" class="logo">
            <!-- span class (material.io - lincense - material design - icons - sharp - type searchicon and copy )-->
            <div class="search-bar">
                <span class="material-icons-sharp">search</span>
                <input type="search" placeholder="search">
            </div>
            <!-- dark or light mode
                  link(https://fontsgoogle.com/icons?icon.query=light+mode )-->
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>

                
                <div class="profile">
                <?php// if(isset($_SESSION['user-id'])): ?>
                
                    <div class="profile-photo">
                        <img src="./images/1686086852avatar10">
                    </div>
                    <h5>Chu Hua</h5>
                   
                    <?php // else : ?>
                   <span class="material-icons-sharp">expand_more</span> 
                  <!-- <ul>
                   <li class="nav_items"><a href="<?= ROOT_URL ?>signin.php">Signin</a> </li>
                    </ul> -->
                </div>
                <?php // endif ?>
                        
                   </div>
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
        </div>
    </nav>
    <!-- END NAV-->