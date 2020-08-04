<?php
include_once('models/places.php');
include_once('models/workers.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Филиалы и сотрудники</title>
</head>
<body>
<div class="container">
<?php foreach ( getPlaces() as $i ) : ?>
    <div>
    <h2> <?=$i[2]?> </h2>
    <a class="btn btn-primary" data-toggle="collapse" data-target="#collapse<?=$i[0]?>" role="button" aria-expanded="false" aria-controls="#collapse<?=$i[0]?>">
        Подробнее
    </a>
    <div class="collapse multi-collapse" id="collapse<?=$i[0]?>">
      <div class="card card-body">
      <h4>Адрес: <b><?=$i[1]?></b></h4>
      <h4>Работники: </h4>
      <?php foreach ( getWorkersByPlace($i[0]) as $worker ) : ?>
            <h6><?=$worker[1]?> - <?=$worker[2]?></h6>
        <?php endforeach; ?>

      </div>
    </div>
    </div>
    <?php endforeach; ?>

</div>
</body>
</html>