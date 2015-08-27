<?php setcookie('queryString', serialize($_GET), time() + 60 * 60 * 24 * 28); // 24 months (2 years) ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <script>
    <?php include '_analytics.js' ?>
    ga('send', 'pageview', '/<?php echo $_GET["p"] ?>');

    <?php if (isset($_GET['r'])): ?>
        window.onload = function() {
          window.location.href = '<?php echo $_GET["r"] ?>';          
        }
    <?php endif ?>
  </script>
</head>
<body>
</body>
</html>