<?php
    require_once("JavascriptUtils.php");
    session_start();

    if (isset($_SESSION["error"])) {
        JavascriptUtils::alert($_SESSION["error"]);
        unset($_SESSION["error"]);
    }
?>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldungsseite</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/registrierung.css">
</head>

<body>
    <form action="prozess.php" method="post">
        <div class="container">
            <label for="name">Name*</label>
            
            <input type="text" 
            id="name" 
            name="name" 
            placeholder="Name eingeben" 
            class="username" 
            required 
            value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
            <br>

            <label for="vorname">Vorname*</label>
            <input type="text" id="vorname" name="vorname" placeholder="Vorname eingeben" class="username" required value="<?php echo isset($_SESSION['vorname']) ? $_SESSION['vorname'] : ''; ?>">
            <br>

            <label for="username">Username*</label>
            <input type="text" id="username" name="username" placeholder="Username eingeben" class="username" required value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
            <br>

            <label for="email">E-Mail*</label>
            <input type="email" id="email" name="email" placeholder="E-mail eingeben" class="email" required value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
            <br>

            <label for="password" >Passwort*</label>
            <div >
            <p id="restrictPara" class="hiddenEl" >"Passwort muss mindestens 8 Zeichen lang sein, ein Großbuchstabe, ein Kleinbuchstabe, eine Zahl und ein Sonderzeichen enthalten."</p>
            </div>
            <input type="password" id="password" name="password" placeholder="Passwort eingeben" class="email" required>
            <br>

            <label for="password">Passwort bestätigen*</label>
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Passwort eingeben"
                class="password" required>
            <br>

            <input type="hidden" name="submit" value="1">

            <input type="submit" name="ok" value="Registrieren">
          
            <a href="index.php">
                <button type="button" class="btn">Abbrechen</button>
            </a> 
            

        </div>
    </form>
<script src="showPasswordFieldTooltip.js"></script>
</body>

</html>