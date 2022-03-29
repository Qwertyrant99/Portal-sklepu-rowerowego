<?php
$i=0;
while($i<$num){
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["order_id"]."</td>";
    echo "<td>".$row["klient_id"]."</td>";
    echo "<td>".$row["towar_id"]."</td>";
    echo "<td>".$row["quantity"]."</td>";
    echo "<td>".$row["price"]."</td>";
    echo "</tr>";
    $i++;
}
?>