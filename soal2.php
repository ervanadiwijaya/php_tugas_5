<?php

$a1 = "Ayo";
$a2 = "Belajar";
$b1 = "Bersama";
$b2 = "Niomic";
$mergeA = $a1 . " " . $a2;
$mergeB = $b1 . " " . $b2;

?>

<h1>Tabel Bilangan</h1>
<table border="1">
    <tr>
        <td>Input 1</td>
        <td>Input 2</td>
        <td>Hasil</td>
    </tr>
    <tr>
        <td><?php echo $a1 ?></td>
        <td><?php echo $a2 ?></td>
        <td><?php echo $mergeA ?></td>
    </tr>
    <tr>
        <td><?php echo $b1 ?></td>
        <td><?php echo $b2 ?></td>
        <td><?php echo $mergeB ?></td>
    </tr>
</table>

<?php echo "</br>Gabungan : " . $mergeA . " ", $mergeB; ?>