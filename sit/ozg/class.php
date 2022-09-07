 <!-- Class Start -->
 <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Popular Classes</span>
          </p>
          <h1 class="mb-4">Classes for Your Kids</h1>
        </div>
        <div class="row">
          <?php 

foreach(gets('class') as $key ):?>
            <div class="col-lg-4 mb-5" >
              <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top img-fluid mb-2" src="style/<?= $key['img_src'] ?>" alt="" />
                <div class="card-body text-center">
                  <h4 class="card-title"><?= $key['title1'] ?></h4>
                  <p class="card-text">
                  <?= $key['title2'] ?>
                  </p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Age of Kids</strong>
                    </div>
                    <div class="col-6 py-1"><?= $key['yoshi'] ?></div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Total Seats</strong>
                    </div>
                    <div class="col-6 py-1"><?= $key['total'] ?></div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Class Time</strong>
                    </div>
                    <div class="col-6 py-1"><?= $key['vaqti'] ?></div>
                  </div>
                  <div class="row">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Tution Fee</strong>
                    </div>
                    <div class="col-6 py-1"><?= $key['narxi'] ?></div>
                  </div>
                </div>
                <a href="?v=veiws&class=" class="btn btn-primary px-4 mx-auto mb-4">veiw</a>
              </div>
            </div>
            <?php
endforeach
          ?>
        
        </div>
      </div>
    </div>
<!-- Class End -->
    <?php

?>
    <!-- Registration Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="card border-0">
              <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">Book A Seat</h1>
              </div>
              <?php
              // if (isset($_POST['btn'])) {
              //   $file = $_FILES['file'];
              //        $fo=['png','gif','jpg','jpeg','php'];
              //        $p=explode('.' , $file['name']);
              //        $i=explode('/' , $file['type']);
              //        $na= $p[0];
              //        $no= $i[0];
              //        $ty= end($p);
              //     if (in_array(end($p) , $fo)) {
              
              //         if ($file['size'] < 1024*100000) {
              //             date_default_timezone_set('Asia/Tashkent');
              //             $set=date('h:i:s');
                          
              //             if (is_dir($conf['img'].$no)) {
                                
              //                     if (move_uploaded_file($file['tmp_name'], $conf['img'] . $no . '/' . time() . '.' .$ty)) {
              //                       $ism=$_POST['name']['name'];
              //                       $ismb=$_POST['nameb'];
              //                       $fam=$_POST['fam'];
              //                       $famb=$_POST['famb'];
              //                       $emil=$_POST['email'];
              //                       $pas=$_POST['parol'];
              //                       $num=$_POST['num'];
              //                       $j='';
              //                       $gur=[];
              //                       $l='';
                                    
              //                       $ozg=gets('class');
              //                       foreach($ozg as $k=> $v){
              //                         $j=explode('-',$v['yoshi']);
              //                         $o=end($j);
              //                         if($num<=$o&&$num>=$j[0]){
              //                           $l=$v['title1'];
              //                         }
              //                       }
              
              //                       $img= $no . '/' . time() . '.' .$ty;
              //                       print_r($gur);
              //                       upend('class_catyyY',['img','ism','fam','guruh','jins'],[$img,$ismb,$fam,$l,$_POST['jins']]);
              
              //                       $res=upend('malumotlar',['ismingiz','familyangiz','email','password','img_src','text'],[$ism,$fam,$emil,$pas,$img,$_POST['text']]);
              //                       if ($res) {
              //                         echo 'bajarildi';
              //                       }
              //                       else{
              
              //                         echo 'bajarildi 0';
              //                       }
                                    
              //                     }
              //             }
              //             else{
              //                 if(mkdir($conf['img'].$no)){
              //                     if (move_uploaded_file($file['tmp_name'], $conf['img'] . $no . '/' . time() . '.' .$ty)) {
                                  
              //                       $ism=$_POST['name'];
              //                       $ismb=$_POST['nameb'];
              //                       $fam=$_POST['fam'];
              //                       $famb=$_POST['famb'];
              //                       $emil=$_POST['email'];
              //                       $pas=$_POST['parol'];
              //                       $num=$_POST['num'];
              //                       $j='';
              //                       $gur=[];
              //                       $l='';
                                    
              //                       $ozg=gets('class');
              //                       foreach($ozg as $k=> $v){
              //                         $j=explode('-',$v['yoshi']);
              //                         $o=end($j);
              //                         if($num<=$o&&$num>=$j[0]){
              //                           $l=$v['title1'];
              //                         }
              //                       }
              
              //                       $img= $no . '/' . time() . '.' .$ty;
              //                       upend('class_catyyy',['img','ism','fam','guruh','jins'],[$img,$ismb,$fam,$l,$_POST['jins']]);
              
              //                       $res=upend('malumotlar',['ismingiz','familyangiz','email','password','img_src','text'],[$ism,$famb,$emil,$pas,$img,$_POST['text']]);
              //                       if ($res) {
              //                         echo 'bajarildi';
              //                       }
              //                       else{
              
              //                         echo 'bajarildi 0';
              //                       }
                                    
              //                     }
              //                 };
              //             }
                          
              //         }
              
              //         else{
              //             echo "ruxsat etiladigandan oshib ketdi";
              //         }
                      
              //     }
              //     else{
              //         echo 'siz faqat '. implode(',', $fo) .'farmatdagi larni yuklay olasiz';
              //   }
              // print_r($file);
                
              // }
              ?>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form method="post" enctype="multipart/form-data" id="form">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Sizning ismingiz"
                      required="required"
                      name="name"
                      id="name"
                      value="Jo'rabek"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Sizning bolangiz ismi"
                      required="required"
                      name="nameb"
                      id="nameb"
                      value="Abdushukur"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Sizning bolangiz familyasi"
                      required="required"
                      name="famb"
                      id="famb"
                      value="Yusupov"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Sizning familyangiz"
                      required="required"
                      name="fam"
                      id="fam"
                      value="Yusupov"
                    />
                  </div>
                  <div class="form-group">
                  <input
                      type="email"
                      class="form-control border-0 p-4"
                      placeholder="Your Email"
                      required="required"
                      name="email"
                      id="email"
                      value=""
                    />
 <p class='d- text-danger' id="p"></p>
 
 <input
                      type="password"
                      class="form-control border-0 my-3 p-4"
                      placeholder="Your Password"
                      required="required"
                      name="parol"
                      id="parol"
                      value=""
                    />
                    <input 
                      type="number"
                      name="num"
                      placeholder="yoshi" 
                      id="yu" 
                      class="form-control mb-3"
                      required="required"
                      value="4"
                      >
                    <input 
                      type="file"
                      name="file"
                      id="file"
                      class="form-control mb-3"
                      required="required"
                      >
                  </div>
                    <select
                      type="file"
                      name="jins"
                      id="jins"
                      class="form-control mb-3"
                      >
                      <option value="1">o'g'il</option>
                      <option value="2">qiz</option>
                    </select>
                    <textarea minlength="20" name="text" id="text" class="form-control my-2" >
izoh:
                    </textarea>
                    <div>
                      <button
                      class="btn btn-secondary btn-block border-0 py-3"
                      id="btn"
                      name="btn"
                     type ="submit" 
                    >
                      Book Now
</button>
                  </div>
                  <script src="sit/js/class.js"></script>
                  <div class="form-group">
                    <table class="table table-light">
                      <tr>
                        <td>
                          ota-ona ismi
                        </td>
                        <td>
                          bola ismi 
                        </td>
                        <td>
                          jinsi
                        </td>
                      </tr>
                      <t-body id="t-b">
                        
                      </t-body>
                    </table>
                  </div>
                  </div>
                  
                <!-- </form> -->
              </div>
              <script>
                     
                    </script>
                  </div>
                  <div>
                    <div class="col-8">
                    <!-- <form method="post">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control border-0 p-4"
                          placeholder="Sarch id"
                          required="required"
                          name="ides"
                        />   
                        <button
                          class="btn btn-secondary btn-block border-0 py-3"
                          type="submit" name="btn2"
                        >
                          search
                        </button> -->
                      </div>
                    </form>
                    </div>
                  <?php
                    $a='a';
                    if (isset($_POST['btn2'])) {
                        $chi=get('malumotlar','id='.$_POST['ides']);
                        $a='b';
                    }
                    if ($a==='b') : ?>
                    <table class="table table-dark">
                          <tbody>
                            <?php
                            $v=$chi;
                            $aab=1;
                            // foreach($chi as $key=>$v): ?> 
                               <tr >
                                    <td style="position: relative;">
                                        
                                        <?= $aab++ ?>
                                        <a class="b" href="?v=ozg.php&q=<?= $v['id'] ?>"><img width="50px" src="03.png" class=""></a>
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
                                        <?= $v['guruh_nomi'] ?>
                                    </td>
                                </tr>
                            <?php //endforeach ?>
                          </tbody>
                    </table>
                  <?php endif ?>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   