<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/layout.css">

    <title>UserPage</title>
</head>

<body>

    <div class="navbar">
            <div class="container">
                <a href="#" class="brand">Online-Shopping</a>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Über uns</a></li>
                        <li><a href="#">Dienstleistungen</a></li>
                        <li><a href="#">Kontakt</a></li>
                        <li><a href="logout.php" class="btn">Abmelden</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    <div class="hero">
        <div class="container">
            <?php
                session_start();
                if(isset($_SESSION['username'])){
                    echo "<h1>Willkommen ".$_SESSION['first_name']. " ".$_SESSION['last_name']."</h1>";
                } else {
                    header("Location: index.php");
                }
            ?>
        </div>
    </div>

</body>
</html>