<?php

$a1 = false;
$a2 = false;
$b1 = false;
$b2 = true;
$c1 = true;
$c2 = false;
$d1 = true;
$d2 = true;

$and1 = $a1 && $a2;
$and2 = $b1 && $b2;
$and3 = $c1 && $c2;
$and4 = $d1 && $d2;
$or1 = $a1 || $a2;
$or2 = $b1 || $b2;
$or3 = $c1 || $c2;
$or4 = $d1 || $d2;
?>


<p>Tabel Logika <span style="background-color: blue;">1111</span></p>
<table border="1">
    <tr>
        <td>input true</td>
        <td>Input 2</td>
        <td>AND</td>
        <td>OR</td>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td><?php echo $and1 === true ? 1 : 0 ?></td>
        <td><?php echo $or1 === true ? 1 : 0 ?></td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td><?php echo $and2 === true ? 1 : 0 ?></td>
        <td><?php echo $or2 === true ? 1 : 0 ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>false</td>
        <td><?php echo $and3 === true ? 1 : 0 ?></td>
        <td><?php echo $or3 === true ? 1 : 0 ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td><?php echo $and4 === true ? 1 : 0 ?></td>
        <td><?php echo $or4 === true ? 1 : 0 ?></td>
    </tr>
</table>