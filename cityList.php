<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme.css">
  <script src="update.city.js"></script>
</head>
<body>

  <h2>City</h2>

  <?php include_once "inc-menu.php"; 
        include_once "dbUtil.php";
        include_once "shared.functions.php";

    $urlCityId = get("cityId", "n/a");

    $sql = "SELECT cityId, regionName, income FROM vw_citysales";
    
    $result = select($sql);
  ?>

  <table>
    <tr>
      <th colspan="2">City ID</th>
      <th>Region</th>
      <th>Income</th>
    </tr>

    <?php
      $total = 0;
      foreach ($result as $row){ 
        $total = $total + $row["income"];
        $regionName = $row["regionName"];
        $cityId = $row["cityId"];
        
        if ($cityId != $urlCityId){
        ?>
          <tr>
            <td><a href="?cityId=<?=$cityId?>"> edit </a></td>
            <td><?= $row["cityId"] ?></td>
            <td><?= $row["regionName"] ?></td>
            <td class="money"><?= money($row["income"]) ?></td>
          </tr>
      <?php }
        elseif ($cityId == $urlCityId){
      ?>

          <tr>
            <td><input type="button" value="modify" onclick="modify()"/></td>
            <td><?= $row["cityId"] ?></td>
            <td><input type="text" value="<?= $regionName ?>"
                  data-city-id="<?=$cityId?>" data-region-name="<?=$regionName?>" id="inputValue"/> 
            </td>
            <td class="money"><?= money($row["income"]) ?></td>
          </tr>

    <?php }
    } ?>
    <tr>
        <td colspan ="3"> Total </td>
        <td class="money"><?= money($total) ?></td>
    </tr>
  </table>


</body>
</html>


