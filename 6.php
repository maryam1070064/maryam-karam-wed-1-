<?php
$arrays = [
    [
        'name' => 'ahmed hamdy',
        'job' => 'front-end',
        'experience' => "3 year of experience"
    ],


    [
        'name' => 'mohammed shaker',
        'job' => 'back-end',
        'experience' => "2 year of experience"
    ],

    [
        'name' => 'ali hasan',
        'job' => 'full-stack',
        'experience' => "4 year of experience"
    ],
   
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php foreach ($arrays as $array) { ?>

        <div class="card" style="width: 20rem;">
                <div class="card-body">
                
            <?php foreach ($array as $values) { ?>
                    <?= "$values <br>" ?>
                    <?php } ?>
                   
                </div>
           
        </div>

    <?php } ?>
</body>

</html>