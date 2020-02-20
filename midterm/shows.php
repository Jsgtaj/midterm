<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shows</title>
</head>

<body>
  <table>
    <thead>
      <th>Show Name</th>
      <th>First Year Aired</th>
      <th>Network Name</th>
    </thead>
    <tbody>
      <?php
      $showList = $_POST['showList'];
      $db = new PDO("mysql:host=172.31.22.43; dbname=Justin200418255", "Justin200418255", "fsQ9DwTT-g");
      $sql = $db->prepare("SELECT showName, firstYear, networkName FROM shows WHERE networkName = :networkName");
      $sql->bindParam(":networkName", $showList, PDO::PARAM_STR, 50);
      $sql->execute();

      $arr = $sql->fetchAll();
      foreach ($arr as $curr) {
        echo "<tr><td>" . $curr['showName'] . "</td><td>" . $curr['firstYear'] . "</td><td>" . $curr['networkName'] . "</td></tr>";
      }

      ?>
    </tbody>
  </table>
</body>

</html>