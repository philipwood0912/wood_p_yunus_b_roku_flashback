<?php
    require_once 'load.php';
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // $welcomeMessage = "Welcome to the member's area";
    } else {
        header('Location: admin/login_page.php');
    }
    if(isset($_POST['logout'])){
        unset($_SESSION['loggedin']);
        header('Location: admin/login_page.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <title>Flashback App</title>
    <style scoped>
        @import 'css/reset.css';
        @import 'css/main.css';
    </style>
</head>
<body>
    <main id="app">
        <div id="main-header">
            <img src="images/roku_logo.svg" alt="logo">
            <div id="header-content">
                <div id="main-content">
                    <form id="search" action="" method="get">
                        <input>
                        <button><i class="fas fa-search fa-2x"></i></button>
                    </form>
                    <li><i class="fas fa-cog fa-2x" style="color:#6c3c97;"></i></li>
                    <li><i class="fas fa-user fa-2x" style="color:#6c3c97;"></i></li>
                    <form action="index.php" method="post">
                        <button id="logout" name="logout"><i class="fas fa-sign-out-alt fa-2x" style="color:#6c3c97"></i></button>
                    </form>
                </div>
                <div id="nav">
                    <router-link to="/">Home</router-link>
                    <router-link to="/movies">Movies</router-link>
                    <router-link to="/tv">TV-Shows</router-link>
                    <router-link to="/music">Music</router-link>
                </div>
            </div> 
        </div>
        <router-view></router-view>
    </main>
    <script defer src="js/main.js" type="module"></script>
</body>
</html>