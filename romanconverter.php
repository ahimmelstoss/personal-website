<html>
<head>
  <title>Roman Numerals Converter</title>
</head>
<body>
  <?php include('romannumerals.php'); ?>
  <h1>A Handy Roman Numerals Converter</h1>
  <p>Please enter a number greater than 0 (remember, the Roman system did not include 0!).</p>

  <form action="romanconverter.php" method="get">
    Number: <input type="text" name="number">
    <input type="submit" value="convert!">
  </form>

  <?php if (!isset($_GET["number"])): ?>
  <?php elseif (isset($_GET["number"]) && is_numeric($_GET["number"]) && $_GET["number"] >= 1): ?> 
    <p>Your Number: <?php echo $_GET["number"] ?></p>
    <?php 
    $myRoman = new Roman($_GET["number"]); 
    $mynumber = $myRoman->toRoman();
    ?>
    <p>Roman Number: <?php echo $mynumber; ?> </p>
  <?php else: ?>
    <p>Error! Please enter a valid number.</p>
  <?php endif; ?>

</body>
</html>