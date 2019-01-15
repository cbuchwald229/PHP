<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>In Class Practice</title>
    <style>
      .purple {
        background-color: purple;
        color: white;
        width: 200px;
        height: 200px;
        margin: auto auto;
      }
      .teal {
        background-color: teal;
        color: white;
        width: 200px;
        height: 200px;
        margin: auto auto;
      }
      .pink {
        background-color: pink;
        color: white;
        width: 200px;
        height: 200px;
        margin: auto auto;
      }
    </style>
    <script>
      var names = <?php echo "['Jeff', 'Mary', 'Mark']"; ?>;
      <?php
        $name1 = "Jeff";
        $name2 = "Mary";
        $name3 = "Mark";
       ?>
       var names2 = <?php echo "['$name1', '$name2', '$name3']"; ?>;
       var names3 = <?php echo "['" . $name1 . "', '" . $name2 . "', '" . $name3 . "']'"; ?>;
    </script>
  </head>
  <body>
    <?php
    $colorCode=1;
    ?>
    <?php if ($colorCode > 0 && $colorCode <= 3) { ?>
      <div class="purple">
        <h1>Purple!!!</h1>
      </div>
    <?php } elseif ($colorCode > 3 && $colorCode <= 6) { ?>
      <div class="teal">
        <h1>Teal!!!</h1>
      </div>
    <?php } else { ?>
      <div class="pink">
        <h1>Pink!!!</h1>
      </div>
    <?php } ?>
  </body>
</html>
