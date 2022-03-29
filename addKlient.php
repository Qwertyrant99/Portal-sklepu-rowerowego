<!Doctype html>
<html lang="pl">
    <head> 
        <?php include 'PHP\headPartHtml.php';?>
</head>
<body>
    <header><?php include 'PHP\header.php';?></header>
    <article>Dodajemy klientów</article>
    <form action="index.php" method="POST">
        <table>
            <tr><td></td></tr><td>Wpisz</td></tr>
            <tr><td>login</td><td><input type="text" name="klient_login"></td></tr>
            <tr><td>imię</td><td><input type="text" name="klient_name"></td></tr>
            <tr><td></td><td><input type="submit" value="Zapisz"></td></tr>
</table>
</form>
<footer><?php include 'PHP\footer.php'; ?></footer>
</body>
</html>