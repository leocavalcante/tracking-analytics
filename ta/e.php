<?php 
  session_start();
  $_SESSION['queryString'] = serialize($_GET);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <script>
    <?php include '_analytics.js' ?>
    ga('send', 'event', 'track', '<?php echo $_GET["a"] ?>');

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