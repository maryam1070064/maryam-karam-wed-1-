<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table w-75 m-auto table-striped" >

        <tbody >
        <?php
        for($num=1;$num<=12;$num++){?>
            <tr>
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <td><?= "$i*$num=" . $num * $i ?></td>
                <?php } ?>
                </tr> <?php }?>

        </tbody>
    </table>
</body>

</html>