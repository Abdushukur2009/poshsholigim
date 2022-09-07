<div class="site-section">
    <div class="container">

        <div class="row d-f mb-5">
            <div class="col-md-9 order-2">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="float-md-left mb-4">
                            <h2 class="text-black h5">Shop All</h2>
                        </div>
                        <div class="d-flex">
                            <div class="dropdown mr-1 ml-md-auto">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Latest
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <?php
                                    $chi=gets('class_catyyY');
                                    $f=[];
                                        foreach($chi as $k=> $v):?>
                                    <a class="dropdown-item" href="?v=roy.php&jad=<?=$v['guruh']?>"><?=$v['guruh']?></a>

                                            <?php
                                      endforeach
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php 
if(isset($_GET['jins'])):
if(isset($_GET['jins'])&&isset($_GET['k'])&&$_GET['k']>=1&&$_GET['k']):
    $a=getLimit('class_catyyY','jins', $_GET['jins'],3,($_GET['k']*3)-3 );
   foreach($a as $k=>$v):
        ?>
        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.html"><img src="<?=$conf['img'].$v['img']?>" alt="Image placeholder" class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.html"><?=$v['ism']?></a></h3>
                                <p class="mb-0"><?=$v['fam']?></p>
                                <p class="mb-0"><?=$v['id']?></p>
                                <p class="text-primary font-weight-bold"><?=$v['guruh']?></p>
                            </div>
                        </div>
                    </div>        
                    <?php
endforeach;
?>  
<?php
else:
    
    $b=search('class_catyyy','jins',$_GET['jins']);
    // print_r($a);
    foreach($b as $v):
        ?>
          <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.html"><img src="<?=$conf['img'].$v['img']?>" alt="Image placeholder" class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.html"><?=$v['ism']?></a></h3>
                                <p class="mb-0"><?=$v['fam']?></p>
                                <p class="text-primary font-weight-bold"><?=$v['guruh']?></p>
                            </div>
                        </div>
                    </div> 
<?php
endforeach;
?>
<?php endif;endif ?>
                    
                </div>
                
            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                    <ul class="list-unstyled mb-0">
                        <?php 
                        $con=countr('class_catyyy','jins',1) ;
                        $con2=countr('class_catyyy','jins',2) ;
                        ?>
                        <li class="mb-1"><a href="?v=roy.php&jins=2" class="d-flex"><span>qizbolalar</span> <span class="text-black ml-auto"><?= $con2['son'] ?></span></a></li>
                        <li class="mb-1"><a href="?v=roy.php&jins=1" class="d-flex"><span>o'gilbolalar</span> <span class="text-black ml-auto"><?= $con['son'] ?></span></a></li>
                    </ul>
                </div>

    
            </div>
            <div class="col-12" >
                    <div class="col-md-12 text-center">
                    <ul class="pagination">
                                          <li class="page-item ">
                                              <a class="page-link bg-dark" href="?v=roy.php&jins=<?= $_GET['jins'] ?>&k=<?= ($_GET['k']-1>0) ? $_GET['k']-1 : $_GET['k'] ?>">&lt;</a>
                                          </li>
                                          <?php
                                          if(isset($_GET['jins'])&&$_GET['jins']==1):
                                              $as=$con['son'];
                                              $b=$as%3;
                                              if ($b<3)    {
                                                $b=3-$b;
                                                $as=$as+$b;
                                              }                               
                                          else{
                                            $as=$as/3;
                                          }
                                          for($i=1; $i<=$as/3 ;$i++):
                                          // if () {
                                              // $as=$i;
                                              // $as++
                                          ?>
                                                  <li class="page-item">
                                                  <a class="page-link <?= (isset($_GET['k'])&&$_GET['k']==$i) ? ' active' :'  bg-dark' ?>" href="?v=roy.php&jins=<?= $_GET['jins'] ?>&k=<?= $i ?>"><?= $i ?></a>
                                              </li>
                                              
                                          <?php
                                          $asd=$i; 
                                          // }    
                                      endfor;
                                  else:
                                  ?>
                                  <?php

                                      
                                          $as=$con2['son'];
                                          $b=$as%3;
                                          if ($b<3){
                                            $b=3-$b;
                                            $as=($as+$b)/3;
                                          }
                                          else{
                                            $as=$as/3;
                                          }
                                          for($i=1; $i<=$as ;$i++):
                                          ?>
                                                  <li class="page-item">
                                                  <a class="page-link <?= (isset($_GET['k'])&&$_GET['k']==$i) ?       ' active' :'  bg-dark' ?>" href="?v=roy.php&jins=<?= $_GET['jins'] ?>&k=<?= $i ?>"><?= $i ?></a>
                                              </li>
                                              
                                          <?php
                                          $asd=$i; 

                                          endfor;    
                                          endif ?>
                                        <li class="page-item">
                                              <a class="page-link bg-dark" href="?v=roy.php&jins=<?= $_GET['jins'] ?>&k=<?= ($_GET['k']+1<=$asd) ? $_GET['k']+1 :$_GET['k'] ?>">&gt;</a>
                                          </li>
                                      </ul>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>