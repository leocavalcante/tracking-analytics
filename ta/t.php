<?php setcookie('queryString', serialize($_GET), time() + 60 * 60 * 24 * 28); // 24 months (2 years) ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <script>
    <?php include '_a.js' ?>
    <?php include '_dm.php' ?>
    <?php include '_r.php' ?>

    <?php if ($_GET['h'] == 'e' && isset($_GET['a'])): ?>
      ga('send', 'event', 'track', '<?php echo $_GET["a"] ?>');
    <?php endif ?>

    <?php if ($_GET['h'] == 'p' && isset($_GET['p'])): ?>
      ga('send', 'pageview', '/<?php echo $_GET["p"] ?>');
    <?php endif ?>
  </script>
</head>
<body>
</body>
</html>