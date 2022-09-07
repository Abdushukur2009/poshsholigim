<div class="container">
    <div class="row">
        <?php
    if (isset($_POST['btn'])&&isset($_GET['q'])) {
  $ism=$_POST['name'];
  $fam=$_POST['fam'];
  $emil=$_POST['email'];
  $pas=$_POST['parol'];
  $gur=$_POST['gur'];
//   echo $gur;
  $res=update("malumotlar",['ismingiz','familyangiz','email','password','guruh_nomi'],[$ism,$fam,$emil,$pas,$gur], $_GET['q']);
  if ($res) {
    echo 'bajarildi';
  }
  else{
    echo 'bajarildi 0';

  }
}
$chi= gets('class');
$b=get('malumotlar','id='.$_GET['q']);
?>
        <div class="col-8 offset-2">
        <div class="card-body rounded-bottom bg-primary p-5">
                <form method="post">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Your Name"
                      required="required"
                      name="name"
                      value="<?= $b['ismingiz'] ?>"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Your Soname"
                      required="required"
                      name="fam"
                      value="<?= $b['familyangiz'] ?>"
                    />
                  </div>
                  <div class="form-group">
                  <input
                      type="email"
                      class="form-control border-0 p-4"
                      placeholder="Your Email"
                      required="required"
                      name="email"
                      value="<?= $b['email'] ?>"
                    />
                  <input
                      type="password"
                      class="form-control border-0 my-3 p-4"
                      placeholder="Your Password"
                      required="required"
                      name="parol"
                      value="<?= $b['password'] ?>"
                    />
                  <select
                      class="form-control"
                      name="gur"
                    >
                    <?php
                    foreach($chi as $k=>$v):
                    ?>
                  <option value="<?=$v['title1']?>"><?=$v['title1']?></option>
                      <?php endforeach ?>
                  </select>
                  </div>
                  <div>
                    <button
                      class="btn btn-secondary btn-block border-0 py-3"
                      type="submit" name="btn"
                    >
                      update
                    </button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>