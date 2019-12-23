<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<style>
    body{
        margin: 0;
        padding: 0;
        color:black;
        background-color: ghostwhite;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    header{
        margin-top: 0;
        width: 100%;
        height: 50px;
        background-color: mediumslateblue;
    }
    td{
        border:1px solid black;
    }

</style>
<header></header>
<table>
    <tr><td>Имя</td><td>Фамилия</td><td>Возраст</td></tr>
<?php
    $get_link = 'api.php?action=get_all';
    $ch = curl_init($_SERVER['SERVER_NAME'].'/'.$get_link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $res = curl_exec($ch);
    $ids = json_decode($res,true);
    curl_close($ch);
    foreach($ids as $id){
        $idl = $id['id'];
        $link = $_SERVER['SERVER_NAME']."/api.php?action=get_user&id_user=$idl";
        $curl = curl_init($link);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $result = curl_exec($curl);
        curl_close($curl);
        $name = json_decode($result,true)['name'];
        $surname = json_decode($result,true)['surname'];
        $age = json_decode($result,true)['age'];
        ?>

            <tr><td><?=$name?></td></td><td><?=$surname?></td><td><?=$age?></td></tr>

        <?php
    }
?>
</table>
</body>
</html>