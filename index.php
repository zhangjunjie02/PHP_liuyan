<?php
//检测是否有数据提交
//empty(); //检测是否有数据提交
//$_POST超全局数组，专门用来接受表单提交过来的数据
//print_r($_POST)
if(empty($_POST)){
    //引入前台页面
    require './index.html';
}else{
    //连接数据库
    $link=mysqli_connect('localhost','root','zhangjunjie','liuyan');
    mysqli_query($link,'set names utf8');

    //执行添加操作
    $sql = "insert into liuyan(name,email,content) value ('$_POST[name]','$_POST[email]','$_POST[content]')";
    //数组的字符串键名在sql 语句中是不能加引号的
    $res = mysqli_query($link,$sql);
    if (!$res){
        echo mysqli_errno($link);
    }else{
        echo '留言添加成功';
    }
}

?>