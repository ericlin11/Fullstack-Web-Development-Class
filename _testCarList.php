<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme.css">
  <script src="update.car.js"></script>
</head>
<body>

<h2>Car</h2>

<?php include_once "inc-menu.php"; 
      include_once "dbUtil.php";
      include_once "shared.functions.php";

    $urlId = get("id", "n/a");

    $sql = "SELECT id, name, price, vendorPrice FROM cars";

    $result = select($sql);
?>


<table>
  <tr>
    <th colspan="2">Car ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Vendor Price</th>
  </tr>

  <?php
    foreach ($result as $row){ 
      $id = $row["id"];
      $name = $row["name"];
      $price = $row["price"];
      $vendorPrice = $row["vendorPrice"];

      if ($id != $urlId){
      ?>
        <tr>
            <td> <a href="?id=<?=$id?>">edit</a> </td>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["price"]; ?></td>
            <td><?= $row["vendorPrice"]; ?></td>
        </tr>
      <?php }
        elseif ($id == $urlId){
        ?>
            <tr>
                <td> <input type="button" value="modify" onclick="modify()"> </td>
                <td><?= $row["id"]; ?><td>
                <td><?= $row["name"]; ?></td>
                <td><input type="text" value="<?= $price ?>"
                    data-car-id="<?=$id?>" data-price="<?=$price?>" id="inputValue"/> 
                 </td>
                <td><?= $row["vendorPrice"]; ?></td>
            </tr>
      <?php }
        } ?>
</table>

</body>
</html>