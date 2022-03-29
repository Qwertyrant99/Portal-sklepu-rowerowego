<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php include 'PHP\headPartHtml.php'; ?>
        <?php include 'PHP\resultOrderKlientTowar.php'; ?>
    </head>
    <body>
        <header><?php include 'PHP\header.php'; ?></header>
        <article>Dodajemy transakcje</article>
        <form action="index.php" method="POST">
            <table>
                <tr><td>Klient</td><td>Towar</td><td>Ilość</td><td>Koszt</td></tr>
                <tr>
                    <td>
                        <select name="klient_id">
                            <?php include 'PHP\selectOrderKlient.php';?>
                        </select>
                    </td>
                    <td>
                        <select name="towar_id">
                            <?php include 'PHP\selectOrderTowar.php';?>
                        </select>
                    </td>
                    <td><input type="number" name="quantity"></td>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr><td></td><td></td><td><input type="submit" value="Zapisz"></td><td></td></tr>
            </table>
        </form>
        <footer><?php include 'PHP\footer.php'; ?></footer>
    </body>
</html>