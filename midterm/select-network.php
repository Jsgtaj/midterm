<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Network</title>
</head>

<body>
  <form action="shows.php" method="POST">
    <fieldset>
      <label for="showList">Select a Show:</label>
      <select name="showList">
        <?php
        $db = new PDO("mysql:host=172.31.22.43; dbname=Justin200418255", "Justin200418255", "fsQ9DwTT-g");
        $sql = $db->prepare("SELECT networkName FROM networks");
        $sql->execute();

        $arr = $sql->fetchAll();
        foreach ($arr as $curr) {
          echo '<option>' . $curr['networkName'] . '</option>';
        }
        $db = null;
        ?>
      </select>
    </fieldset>
    <fieldset>
      <button>Get Shows</button>
    </fieldset>
  </form>
</body>

</html>