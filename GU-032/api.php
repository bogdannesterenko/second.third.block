<?php
    $connection = new mysqli('localhost','root','','api');
    if($connection->error){
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        die();
    }
    if($_GET['action'] == 'get_all'){
        $arr = array();
        $get_all = $connection->query('SELECT id FROM `users`');
        while($rs = $get_all->fetch_assoc()){
            $arr[]=$rs;
        }
        $arr = json_encode($arr);
        die($arr);
    }
    if($_GET['action']=='get_user'&&$_GET['id_user']){
        $id = $_GET['id_user'];
        $rs = $connection->query("SELECT * FROM `users` WHERE id = $id");
        if(!$rs){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            die();
        }
        $rs = $rs->fetch_assoc();
        die(json_encode($rs));
    }
    if($_GET['action']=='delete'){
        $id = $_POST['id_user'];
        $connection->query("DELETE FROM `users` WHERE id = $id");
    }
?>