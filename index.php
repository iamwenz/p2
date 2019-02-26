<html>

<head>
  <meta charset="UTF-8">
  <title>E15 P2</title>
  <link href="p2.css" rel="stylesheet">
  <?php require "logic.php"; ?>
</head>

<body>
  <div class="wrapper">
    <div class="title">Basal Metabolic Rate</div>
    <div class="formBox">
      <form action="results.php" method="post">
        <div> Calculate your pork belly </div>
        <div>Put down your name<br>
          <input type="text" id="name" name="name"></input>
        </div>
        <div>Gender
          <select name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
         </select>
        </div>
        <div>Age
          <input type="number" id="age" name="age">
        </div>
        <div>Height (cm)
          <input type="number" id="height" name="height">
        </div>
        <div>Weight (kg)
          <input type="number" id="weight" name="weight">
        </div>
        <button aria-label="calculate" type="submit">Calculate</button>
        <button aria-label="clear" type="reset">Clear</button>
      </form>

    </div>
    <footer>
      <p>Copyrights By C.Lai</p>
    </footer>
  </div>
</body>

</html>
