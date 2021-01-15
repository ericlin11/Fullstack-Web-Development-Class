<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>

<h2>Group</h2>

<?php include_once "inc-menu.php"; 
      include_once "dbUtil.php";
?>

<?php
  $sql = "SELECT * FROM carGroups";
  $result = select($sql);
?>


<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>

  <?php
    foreach ($result as $row){ ?>
      <tr>
        <td><?= $row["groupId"]; ?></td>
        <td><?= $row["groupName"]; ?></td>
      </tr>
   <?php } ?>
</table>

</body>
</html>
