<?php
require_once('config.php');

$id = $_GET['criteria'];
$query = "DELETE FROM input WHERE id =$id ";

$res = mysqli_query($conn, $query);

if($res){
    header(header:'Location:index.php');
}else{

}
