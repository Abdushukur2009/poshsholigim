<?php
if (isset($_GET['dal'])) {
    dalete('users','id='.$_GET['dal']);
    ?>
    <script>
        window.location= 'index.php';
    </script>
    <?php
}
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
                    <td>t/r</td>
                    <td>id</td>
                    <td>ism</td>
                    <td>familya</td>
                    <td>email</td>
                    <td>parol</td>
                </tr>
                <tbody>
                    
                            <?php
                            $aa=1;
                            $aab=1;

                            foreach($chi as $key=>$v): ?> 
                               <tr >
                                    <td style="position: relative;">
                                        
                                        <?= $aab++ ?>
                                        <a class="b" href="?dal=<?=$v['id']?>"><img width="50px" src="../delete.png" class=""></a>
                                    </td>
                                    <td style="position: relative;">
                                        <?= $v['id'] ?>
                                    </td>
                                    <td>
                                        <?= $v['ismingiz'] ?>
                                    </td>
                                    <td>
                                        <?= $v['familyangiz'] ?>
                                    </td>
                                    <td>
                                        <?= $v['email'] ?>
                                    </td>
                                    <td style="position: relative;">
                                        <?= $v['parol'] ?>
                                <a class="a" href="http://localhost/dars/baza-1/viw.php?v=<?= $aab-1 ?>"><img width="50px" src="../eye.svg" class=""></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                       
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>