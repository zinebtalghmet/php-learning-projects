<?php
include 'db.php';
$minPrice = 2500;

$sql = "SELECT asset_id, serial_number,device_name, price, status FROM assets WHERE price > :minPrice";

$statment = $pdo->prepare($sql);

$statment->execute(['minPrice' =>$minPrice]);

$assets =$statment->fetchAll();

?>
<ul>
    <?php foreach ($assets as $asset) : ?>
        <li><?= $asset['device_name'] ?> - $<?= $asset['price'] ?></li>
    <?php endforeach; ?>
</ul>

</table>