<?php
include 'db.php';

$sql = "SELECT category_id,name FROM category";

$stmt = $pdo->prepare($sql);
$stmt -> execute();
$cats = $stmt->fetchAll();
?>
<select>
<?php foreach($cats as $cat) : ?>
<option value = "<?= $cat['category_id']?>"><?= $cat['name'] ?></option>
<?php endforeach; ?>
</select>