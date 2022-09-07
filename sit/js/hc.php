<?php

include '../../db.php';
// function asos()
// {
//     $db=new mysqli('localhost','root','','posholigim');

//     if($db->connect_errno <= 0){
//         $db->set_charset('utf8');
//     return $db;

//     }
//     else{
//         echo 'xato';
//     }
// }
if (isset($_POST['name'])) {
    $tr=trim($_POST['name'],' ');
$db=asos();
$db=$db->query("SELECT * FROM malumotlar WHERE email='{$tr}'");
if (isset($db->num_rows)&&$db->num_rows>0) {
  echo 0;
}
  else{
    echo 1;
 }
}

if(isset($_POST['btn'])) {
  print_r($_POST['b']);
echo $_POST['b'];
  $o=[];
  $p=[];
  $as='';
  
  // print_r($_POST['btn']);
  $a=-1;
  $al='';
  foreach($_POST['btn']as$k=>$v){
    $a++;
  $al=trim($v,' ');
  $as=trim($al,'izoh:');
   $o[]=$as;
 }
 // if (isset($_POST['btn'])) {
                // $file = $_FILES['file'];
                //      $fo=['png','gif','jpg','jpeg','php'];
                //      $p=explode('.' , $file['name']);
                //      $i=explode('/' , $file['type']);
                //      $na= $p[0];
                //      $no= $i[0];
                //      $ty= end($p);
                //   if (in_array(end($p) , $fo)) {
              
                //       if ($file['size'] < 1024*100000) {
                //           date_default_timezone_set('Asia/Tashkent');
                //           $set=date('h:i:s');
                          
                //           if (is_dir($conf['img'].$no)) {
                                
                //                   if (move_uploaded_file($file['tmp_name'], $conf['img'] . $no . '/' . time() . '.' .$ty)) {
                                  
                                    $ism=$o['0'];
                                    $ismb=$o['1'];
                                    $fam=$o['2'];
                                    $famb=$o['3'];
                                    $emil=$o['4'];
                                    $pas=$o['5'];
                                    $num=$o['6'];
                                    $jins=$o['7'];
                                    $text=$o['8'];
                                    $j='';
                                    $gur=[];
                                    $l='';
                                    
                                    $ozg=gets('class');
                                    foreach($ozg as $k=> $v){
                                      $j=explode('-',$v['yoshi']);
                                      $o=end($j);
                                      if($num<=$o&&$num>=$j[0]){
                                        $l=$v['title1'];
                                      }
                                    }
                                    // $img= $no . '/' . time() . '.' .$ty;
                                    // print_r($gur);
                                    upend('class_catyyY',['img','ism','fam','guruh','jins'],['',$ismb,$fam,$l,$jins]);
              
                                    $res=upend('malumotlar',['ismingiz','familyangiz','email','password','img_src','text'],[$ism,$fam,$emil,$pas,'',$text]);
                                    if ($res) {
                                      echo 'bajarildi';
                                    }
                                    else{
              
                                      echo 'bajarildi 0';
                                    }
                                    
                          //         }
                          // }
              // else{
                          //     if(mkdir($conf['img'].$no)){
                          //         if (move_uploaded_file($file['tmp_name'], $conf['img'] . $no . '/' . time() . '.' .$ty)) {
                                  
                          //           $ism=$o['0'];
                          //           $ismb=$o['1'];
                          //           $fam=$o['2'];
                          //           $famb=$o['3'];
                          //           $emil=$o['4'];
                          //           $pas=$o['5'];
                          //           $num=$o['6'];
                          //           $j='';
                          //           $gur=[];
                          //           $l='';
                                    
                          //           $ozg=gets('class');
                          //           foreach($ozg as $k=> $v){
                          //             $j=explode('-',$v['yoshi']);
                          //             $o=end($j);
                          //             if($num<=$o&&$num>=$j[0]){
                          //               $l=$v['title1'];
                          //             }
                          //           }
              
                          //           // $img= $no . '/' . time() . '.' .$ty;
                          //           upend('class_catyyy',['img','ism','fam','guruh','jins'],[$img,$ismb,$fam,$l,$_POST['jins']]);
              
                          //           $res=upend('malumotlar',['ismingiz','familyangiz','email','password','img_src','text'],[$ism,$famb,$emil,$pas,$img,$_POST['text']]);
                          //           if ($res) {
                          //             echo 'bajarildi';
                          //           }
                          //           else{
              
                          //             echo 'bajarildi 0';
                          //           }
                                    
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
 print_r ($o);
}
?>