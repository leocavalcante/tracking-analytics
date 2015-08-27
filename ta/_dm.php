<?php foreach ($_GET as $key => $val): ?>
  <?php if (substr($key, 0, 9) == 'dimension' || substr($key, 0, 6) == 'metric'): ?>
    ga('set', '<?php echo $key ?>', '<?php echo $val?>');
  <?php endif ?>
<?php endforeach ?>