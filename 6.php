<?php
$devData = [ //multidimensional array
  [
    'name' => 'ibrahim mohamed',
    'job' => 'full-stack',
    'experience' => 2
  ],
  [
    'name' => 'ahmed hamdy',
    'job' => 'front-end',
    'experience' => 3
  ],
  [
    'name' => 'mohammed shaker',
    'job' => 'back-end',
    'experience' => 2
  ],
  [
    'name' => 'ali hasan',
    'job' => 'full-stack',
    'experience' => 4
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <!-- 6- write a script that displays data in bootstrap cards   -->
  <?php foreach ($devData as $data) { ?> 
  <!--here i loop about the whole card to put data from every arrry in multidimensional array in on card-->
    <div class="card d-inline-flex m-3 text-center" style="width: 20rem;">
      <div class="card-body">
        <h3 class="card-title"><?= $data['name']; ?></h3> <!-- $data['name'] it equal $devData[$i]['key'] so here access data with the key  -->
        <p class="card-text"><?= $data['job']; ?></p>
        <p class="card-text"><strong><?= $data['experience']; ?></strong></p>
      </div>
    </div>
  <?php } ?>
  <!-- 6- write a script that displays data in bootstrap cards   -->

</body>

</html>