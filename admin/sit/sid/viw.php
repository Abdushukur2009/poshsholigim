<?php
    $u=get('class','id='.$_GET['l']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .a{
            display: none;
            position: absolute;
            top: 0;
            right: -40px;
        }
        .b{
            display: none;
            position: absolute;
            top: 0;
            left: -55px;
        }
        tr:hover td .a{
            display: flex;

        }
        tr:hover td .b{
            display: flex;

        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <table class="table table-dark">
                <tr>
                    <td>id</td>
                    <td>yoshi</td>
                    <td>total</td>
                    <td>vaqti</td>
                    <td>img</td>
                    <td>narxi</td>
                </tr>
                <tbody>
                               <tr >
                                    <td style="position: relative;">
                                        <a href="?v=class.php" class="b">Chiqish--</a>
                                        <?= $u['id'] ?>
                                    </td>
                                    <td>
                                        <?= $u['yoshi'] ?>
                                    </td>
                                    <td>
                                        <?= $u['total'] ?>
                                    </td>
                                    <td>
                                        <?= $u['vaqti'] ?>
                                    </td>
                                    <td>
                                        <img style="width: 100px;" src="<?= $conf['img'].$u['img_src'] ?>" >
                                    </td>
                                    <td style="position: relative;">
                                        <?= $u['narxi'] ?>
                                    </td>
                                </tr>
                       
                </tbody>
            </table>
        </div>