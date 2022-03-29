<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php include 'PHP\headPartHtml.php';?>
        <?php include 'PHP\czyWpisTowar.php';?>
        <?php include 'PHP\zrobWpisTowar.php';?>
        <?php include 'PHP\resultTowar.php';?>
    </head>
    <body>
        <header><?php include 'PHP\header.php';?></header>
        <h2>Takich mamy towary</h2>
        <h3>Tylu mamy towarów: <?php echo $num?></h3>
        <table>
            <tr><th>id</th><th>nazwa</th><th>cena</th></tr>
            <?php include 'PHP\tableTowar.php';?>
        </table>
        <footer><?php include 'PHP\footer.php';?></footer>
    </body>
</html>