<div class="container-fluid">
    <div class="row text-center">
    <?php 
      if (isset($_GET['dal'])&& isset($_GET['dalet'])) {
        dalete('class','id='.$_GET['dal']);
        $fils=$_GET['dalet'];
        ?>
        <script>
            window.location.href="?v=class.php";
        </script>
        <?php
            unlink('../style/'.$fils);

        ?>
        <script>
        </script>
        <?php
    }
             $o='';
             $set='';
             $file='';
              if (isset($_POST['il'])) {
                $file = $_FILES['file'];
                        //   print_r($file);
                           $fo=['png','gif','jpg','jpeg','php'];
                           $p=explode('.' , $file['name']);
                           $i=explode('/' , $file['type']);
                           $na= $p[0];
                           $no= $i[0];
                           $ty= end($p);
                        if (in_array(end($p) , $fo)) {

                            if ($file['size'] < 1024*100000) {
                                date_default_timezone_set('Asia/Tashkent');
                                $set=date('h:i:s');
                                
                                if (is_dir($conf['img'].$no)) {
                                      
                                        if (move_uploaded_file($file['tmp_name'], $conf['img'] . $no . '/' . time() . '.' .$ty)) {
                                            $yosh=$_POST['yoshi'];
                                            $total=$_POST['total'];
                                            $vaqti=$_POST['vaqti'];
                                            $narxi=$_POST['narxi'];
                                            $title=$_POST['title1'];
                                            $matn=$_POST['title2'];
                                            $img_srs=$no . '/' . time() . '.' .$ty;
                                            $rs=upend('class',['img_src','yoshi','total','vaqti','narxi','title1','title2',],[$img_srs,$yosh,$total,$vaqti,$narxi,$title,$matn]); 
                                          if($rs){
                                            echo "zo'r";
                                          }
                                          else{
                                            echo "ko'r";
                                          }
                                        }
                                }
                                else{
                                    if(mkdir($conf['img'].$no)){
                                        if (move_uploaded_file($file['tmp_name'], $conf['img'] . $no . '/' . time() . '.' .$ty)) {
                                        
                                            $yosh=$_POST['yoshi'];
                                            $total=$_POST['total'];
                                            $vaqti=$_POST['vaqti'];
                                            $narxi=$_POST['narxi'];
                                            $title=$_POST['title1'];
                                            $matn=$_POST['title2'];
                                            $img_srs=$no . '/' . time() . '.' .$ty;
                                            $rs=upend('class',['img_src','yoshi','total','vaqti','narxi','title1','title2'],[$img_srs,$yosh,$total,$vaqti,$narxi,$title,$matn]); 
                                        }
                                    }
                                }
                                
                            }
                
                            else{
                                echo "ruxsat etiladigandan oshib ketdi";
                            }
                            
                        }
                        else{
                            echo 'siz faqat '. implode(',', $fo) .'farmatdagi larni yuklay olasiz';
                        }
                        
              }
              ?>
        <div class="col-8 offset-2">
            <form   method="post" enctype="multipart/form-data">
                <?php
                $a=1;
                foreach(gets('class') as $k=>$v){
                    $a=$v['id'];
                }
                $b='';
                if ($b!='') {
                    # code...
                    $b=get('class','id='.$a);
                }
                
                ?>
                <input type="text" name="yoshi" placeholder="YOSHI" class="form-control my-3">
                <input type="text" name="total" placeholder="TOTAL" class="form-control mb-3">
                <input type="text" name="vaqti" placeholder="VAQTI" class="form-control mb-3">
                <input type="text" name="narxi" placeholder="NARXI" class="form-control mb-3">
                <input type="text" name="title1"  placeholder="sarlavha" class="form-control mb-3">
                <textarea type="text" name="title2"  placeholder="matn" class="form-control mb-3"></textarea>
                <input type="file" name="file" value="" multiple="true" class="form-control mb-3">
                <select name="caty" class="form-control mb-3">
                    <option value="1">active</option>
                    <option value="0">disabled</option>
                </select>
                <button type="submit" class="btn btn-block btn-success" name="il">qo'shish</button>
            </form>
            <div class="mt-5  pd-20 card-box mb-30">
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">yoshi</th>
								<th scope="col">total</th>
								<th scope="col">narxi</th>
								<th scope="col">vaqti</th>
								<th scope="col">ish</th>
							</tr>
						</thead>
						<tbody>
                        <?php 
                
                        $hi=gets('class');
                        $aab=1;
                    
                        foreach($hi as $key => $v): ?>
                            <tr>
                                            <th scope="row"><?= $v['id'] ?></th>
                                            <td><?= $v['yoshi'] ?></td>
                                            <td><?= $v['total'] ?></td>
                                            <td><?= $v['narxi'] ?></td>
                                            <td><?= $v['vaqti'] ?></td>
                                            <td><a href="?v=class.php&dal=<?=$v['id']?>&dalet=<?=$v['img_src']?>" class="btn btn-sm btn-danger" >dalete</a>
                                                <a href="?v=viw.php&l=<?= $v['id'] ?>" class="btn btn-sm btn-primary mx-2" >veiw</a>
                                            </td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                        </tbody>
            </table>
        </div>
        </div>
        
    </div>
</div>