<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php include 'PHP\headPartHtml.php';?>
        <?php include 'PHP\czyWpisKlient.php';?>
        <?php include 'PHP\zrobWpisKlient.php';?>
        <?php include 'PHP\resultKlient.php';?>
    </head>
    <body>
        <header><?php include 'PHP\header.php';?></header>
        <h2>Takich mamy klientów</h2>
        <h3>Tylu mamy klientów: <?php echo $num?></h3>
        <table>
            <tr><th>id</th><th>login</th><th>name</th></tr>
            <?php include 'PHP\tableKlient.php';?>
        </table>
        <footer><?php include 'PHP\footer.php';?></footer>
    </body>
</html>