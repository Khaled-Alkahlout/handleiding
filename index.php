<?php

$name = $_GET['name'];
$title = $_GET['title'];

echo "
<!DOCTYPE html>
<html lang=\"\">
  <head>
    <meta charset=\"utf-8\">
    <title>$title</title>
  </head>
  <body>
    <h1>Welkom op deze webapp Github demo $name</h1>
    <nav></nav>
    <header></header>
    <main></main>
    <footer></footer>
    <form action='index.php' method='get'>
          <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Vul uw naam in\" value=\"$name\"><br>
          <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Voer de titel in\" value=\"$title\"><br><br>
          <input type=\"submit\" value=\"Submit\">
    </form>
  </body>
</html>
";

// om de bovenstaande code goed te gebruiken moet je apache van Xamp opstarten en deze URL invoeren:
// http://localhost/Gouda_SWD1/index.php?name= van Henry
