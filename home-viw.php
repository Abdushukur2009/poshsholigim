<?php
require_once 'db.php';
    $u=get('malumotlar',$_GET['l']);
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
            <a href="admin.php">royxatdan o'tish</a>
            <table class="table table-dark">
                <tr>
                    <td>id</td>
                    <td>ism</td>
                    <td>familya</td>
                    <td>email</td>
                    <td>parol</td>
                </tr>
                <tbody>
                               <tr >
                                    <td style="position: relative;">
                                        <a href="index.php" class="b">Chiqish--</a>
                                        <?= $u['id'] ?>
                                    </td>
                                    <td>
                                        <?= $u['ismingiz'] ?>
                                    </td>
                                    <td>
                                        <?= $u['familyangiz'] ?>
                                    </td>
                                    <td>
                                        <?= $u['email'] ?>
                                    </td>
                                    <td style="position: relative;">
                                        <?= $u['password'] ?>
                                    </td>
                                </tr>
                       
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>