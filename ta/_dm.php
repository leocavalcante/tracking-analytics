<?php foreach ($_GET as $key => $val): ?>
  <?php if ($key[0] == 'd'): ?>
    ga('set', 'dimension<?php echo $key[1] ?>', '<?php echo $val?>');
  <?php endif ?>

  <?php if ($key[0] == 'm'): ?>
    ga('set', 'metric<?php echo $key[1] ?>', <?php echo $val?>);
  <?php endif ?>
<?php endforeach ?>