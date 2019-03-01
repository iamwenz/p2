<html>

<head>
  <meta charset="UTF-8">
  <title>E15 P2</title>
  <link href="p2.css" rel="stylesheet">
  <?php require "logic.php";
  ?>
</head>

<body>
  <div class="wrapper">
    <div class="title">Basal Metabolic Rate</div>
    <div class="formBox">
      <p>Hello <b><?php echo $bmrForm->name; ?></b>, your BMR is <b><?php echo $bmrForm->bmr; ?></b></p>

    </div>
    <footer>
      <p>Copyrights By C.Lai</p>
    </footer>
  </div>
</body>

</html>
