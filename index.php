<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>

    <?php include("atomic-head.php"); ?>

</head>

<body>


  <?php foreach (glob("components/*/*.php") as $filename) {
      require_once $filename;
  } ?>

</body>

<?php include("atomic-foot.php"); ?>

</html>
