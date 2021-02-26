<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <!-- 4- write a script to draw the multiplication table  -->
  <table class="table table-striped table-bordered">

    <?php for ($i = 1; $i <= 12; $i++) { ?>
      <tr class="col">
      <!-- the first loop it will be 1 forst then enter to the second for and loop 12 times and
        multiple 1 from first loop to every roll of second roll from 1 to 12 and repeat until i=12 to v=12;
        and i put <tr> of table in fisrt loop to put all rolls of second loop ex:1*1 to 1*12 in one <tr>
        and put <td> in second loop to put every roll of the second for ex:1*12 in one <td>-->
        <?php for ($v = 1; $v <= 12; $v++) { ?>
          <td><?= "$v * $i =" . $i * $v; ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>
  <hr>

  <!-- 4- write a script to draw the multiplication table   -->
</body>

</html>