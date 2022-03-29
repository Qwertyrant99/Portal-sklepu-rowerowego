<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php include 'PHP\headPartHtml.php';?>
        <?php include 'PHP\czyWpisOrder.php';?>
        <?php include 'PHP\zrobWpisOrder.php';?>
        <?php include 'PHP\resultOrder.php';?>
    </head>
    <body>
        <header><?php include 'PHP\header.php';?></header>
        <h2>Takie są transakcje</h2>
        <h3>Tyle jest transakcji: <?php echo $num?></h3>
        <table>
            <tr><th>id</th><th>Klient</th><th>towar</th><th>ilość</th><th>koszt</th></tr>
            <?php include 'PHP\tableOrder.php';?>
        </table>
        <footer><?php include 'PHP\footer.php';?></footer>
    </body>
</html>