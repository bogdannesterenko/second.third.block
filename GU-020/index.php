<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#20 - Создать таблицу в базе данных</title>
    <style>
        #task{
            margin-top: 20px;
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
        .text-main{
            margin: 2vh 0;
        }
        .text-name, .text-sql{
            text-align: center;
            font-size: 1.2em;
        }
        .text-name{
            font-style:italic;
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
<div id="task"><b>Задание</b><p>Создать таблицу в базе данных. В которой будут находиться данные о пользователях. Одно из полей будет дата рождения. Получить всех пользователей, у которых будет день рождение через 10 дней.</p></div>
<div class="text-main">
    <p class="text-name">Используем запрос MySql</p>
    <p class="text-sql">SELECT * FROM user_data WHERE DATE_FORMAT(`birth`, '%m-%d')= DATE_FORMAT(ADDDATE(CURDATE(),10) , '%m-%d')</p>
</div>
<div>
<a href="user_data.sql" download>
    <button>Скачать дамп базы данных</button>
</a>
</div>
</body>
</html>