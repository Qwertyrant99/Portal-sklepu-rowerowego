<!Doctype html>
<html lang="pl">
    <head> 
        <?php include 'PHP\headPartHtml.php';?>
</head>
<body>
    <header><?php include 'PHP\header.php';?></header>
    <article>Dodajemy towary</article>
    <form action="index.php" method="POST">
        <table>
            <tr><td></td></tr><td>Wpisz</td></tr>
            <tr><td>nazwa</td><td><input type="text" name="towar_nazwa"></td></tr>
            <tr><td>cena</td><td><input type="text" name="towar_cena"></td></tr>
            <tr><td></td><td><input type="submit" value="Zapisz"></td></tr>
</table>
</form>
<footer><?php include 'PHP\footer.php'; ?></footer>
</body>
</html>