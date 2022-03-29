<?php
$nav = '<nav><table>';
$nav .= '<tr><td></td><td><a href="index.php">Strona główna</a></td><td></td></tr>';
$nav .= '<tr>
<td><a href="viewTowar.php">Zobacz towary</a></td>
<td><a href="viewKlient.php">Zobacz klientów</a></td>
<td><a href="viewOrder.php">Zobacz transakcje</a></td>
</tr>';
$nav .= '<tr>
<td><a href="addTowar.php">Dodaj towar</a></td>
<td><a href="addKlient.php">Dodaj klienta</a></td>
<td><a href="addOrder.php">Dodaj transakcję</a></td>
</tr>';
$nav .= '</table></nav>';
echo $nav;
?>