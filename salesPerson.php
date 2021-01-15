<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>

<h2>Sales Person</h2>

<?php include_once "inc-menu.php"; 
      include_once "dbUtil.php";
?>

<?php
  $sql = "SELECT * FROM salesperson";
  $result = select($sql);
?>

<table>
  <tr>
    <th>SalesPerson ID</th>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>

  <?php
    foreach ($result as $row){ ?>
      <tr>
        <td><?= $row["salesPersonId"]; ?></td>
        <td><?= $row["firstName"];; ?></td>
        <td><?= $row["lastName"]; ?></td>
      </tr>
  <?php } ?>
</table>

</body>
</html>
