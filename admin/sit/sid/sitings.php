<div class="container-fluid">
<?php
      // include_once '../../db.php';
if (isset($_GET['dal'])) {
    dalete('malumotlar','id='.$_GET['dal']);
    ?>
    <script>
        // window.location= 's.php';
    </script>
    <?php
}
$chi=gets('malumotlar');
?>

      <div class="container">
        <div class="row">
        <div class="pd-20 card-box mb-30">
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">tr</th>
								<th scope="col">#</th>
								<th scope="col">ism</th>
								<th scope="col">familiya</th>
								<th scope="col">email</th>
								<th scope="col">prol</th>
								<th scope="col">ish</th>
							</tr>
						</thead>
						<tbody>
                    
                            <?php
                            $aa=1;
                            $aab=1;

                            foreach($chi as $key=>$v): ?> 
                               <tr >
                                    <td style="position: relative;">
                                        
                                        <?= $aab++ ?>
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
                                    <td >
                                        <?= $v['password'] ?>
                                    </td>
                                    <td style="position: relative;">
                                        <a href="?v=home-viw.php&l=<?= $aab-1 ?>" class="btn btn-sm btn-success mx-2">veiw</a>
                                        <a href="?v=sitings.php&dal=<?=$v['id']?>" class="btn btn-sm btn-danger mx-2">dalete</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                       
                </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>    
</div>