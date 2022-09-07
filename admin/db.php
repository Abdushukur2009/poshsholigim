<?php 

function asos()
{
    $db=new mysqli('localhost','root','','posholigim');

    if($db->connect_errno <= 0){
        $db->set_charset('utf8');
    return $db;

    }
    else{
        echo 'xato';
    }
}
function gets($table)
{
    $db = asos();
    $rrr=$db->query("SELECT * FROM ".$table);

    $gg=[];
    while($a=$rrr->fetch_assoc()){
        $gg[]=$a;
    }
    return $gg;
}
function dalete($arg1,$arg2)
{
    $db=asos();
    $rs=$db->query("DELETE FROM $arg1 WHERE $arg2");
    return $rs;
}
function get($table,$id)
{
    $db = asos();

    $r = $db->query("SELECT *FROM $table WHERE $id");

    return $r->fetch_assoc();
}

function upend($table, $col = [], $values = [])
{
    $db = asos();
    $query = "INSERT INTO $table (";
    $val = '';
    if (is_array($col) && is_array($values)) {
        if (count($col) == count($values)) {

            $query .= trim(implode(', ', $col), ' ') . ") VALUES (";

            for ($i = 0; $i < count($values); $i++) {
                $val .= "'{$values[$i]}', ";
            }

            $query = $query . trim($val, ', ') . ")";
                $sa=$db->query($query);
           
                return $sa;
           
        }
    }
}
function update($table, $col = [], $values = [],$id)
{
    $db = asos();
    $query = "UPDATE $table SET ";
    $val = '';
    if (is_array($col) && is_array($values)) {
        if (count($col) == count($values)) {

            for ($i = 0; $i < count($values); $i++) {
                $query .= $col[$i] . '=' . "'" . $values[$i] . "', ";
            }


            $query = trim($query, ', ') . " WHERE id=$id";
            if ($db->query($query)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
function getLimit($table, $col = 'status', $limit = 20)
{
    $db = asos();

    $r = $db->query("SELECT *FROM $table WHERE $col=1 LIMIT $limit");
    if($r->num_rows > 0){
        $arr = [];
        while($a = $r->fetch_assoc()){
            $arr[] = $a;
        }
        return $arr;
    } else{
        return false;
    }
}
?>