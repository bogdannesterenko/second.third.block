<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#21 - Массив чисел</title>
    <style>

        #task{
            margin: 20px 0;
            padding: 20px;
            border:1px dashed darkgrey;
            border-radius: 5px;
            width: 60%;
            text-align: center;
        }
        #task p{
            font-size: 1.3em;
            font-weight: normal ;
        }
        #task b{
            font-size: 2em;
        }
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
         span {
            color: green;
            font-weight:bold;
            font-size:1.4em;

        }
        button {
            padding:.45em;
            width:100%;
            border-radius:.8em;
            border:none;
            background: #62e25d;
            box-shadow: inset 2px 2px 5px rgba(154, 147, 140, 0.5), 1px 1px 5px rgba(255, 255, 255, 1);
            font-size:1.8em;
            cursor: pointer;
            transition: .5s linear;;
        }
        button:hover{
            color: ghostwhite;
            background: #69fa64;
            box-shadow: 0 100px 0 0 rgba(0,0,0,.2) inset;
        }
    </style>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b><p>Имеется массив чисел, получить из таблицы в задаче 20 список всех пользователей, чьи ID совпадают с числами из массива.<br><span>Имя БД exer_20</span></p></div>
<div>
    <a href="user_data.sql" download>
        <button>Скачать дамп базы данных</button>
    </a>
</div>
<?php
$dbh = new PDO('mysql:host=localhost;dbname=exer_20', 'root');
$arrayOfIds = [1,3,8,10];
$stringIds = implode(',', $arrayOfIds);
$queryResult = $dbh->query('SELECT * FROM `user_data` WHERE `id` in ('.$stringIds.')');
foreach($queryResult as $row) {
echo "<pre>";
print_r($row);
echo "</pre>";}
?>
</body>
</html>
