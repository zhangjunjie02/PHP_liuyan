<?php
//引入连接数据库的文件
require './link.php';
$sql = 'select * from liuyan';

$res = mysqli_query($link,$sql);
if (!$res){
    echo mysqli_error($link);
    exit();
}
//获取具体的数据
$data = array();
while ($row = mysqli_fetch_assoc($res)){
   $data[] = $row;
}
#print_r($data);//二维数组
//引入前台模版
require './meglist.html'

?>



