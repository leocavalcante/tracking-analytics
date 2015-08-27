<?php if (isset($_GET['r'])): ?>
    window.onload = function() {
      window.location.href = '<?php echo $_GET["r"] ?>';          
    }
<?php endif ?>