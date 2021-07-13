<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logga in </title>
    <link rel="stylsheet" href="style.css">

</head>
<body>
<header>
<ul>
<li><a href="index.php">Hem</a></li>
<li><a href="#">Kontakt</a></li>
<li><a href="#">Om oss</a></li>
</ul>

<div>

<form action="includes/login.inc.php" method="post">
<input type= "text" name="mailuid" placeholder="Användarnamn/E-mail">
<input type= "lösenord" name="psw" placeholder="Lösenord...">
<button type="tryck" name="login-submit">Loga in</button>  
   
</form>

<a href="signup.php">Skapa ny användare</a>
<form action="includes/logout.inc.php" method="post">
<button type="tryck" name="logout-submit">Logga ut</button>  

</form>
</div>

</header>

    
</body>
</html>
