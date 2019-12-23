<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#18 - Создать БД из трех таблиц</title>
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
        .button{
            margin:2vh 0;
        }
    </style>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b>
    <p>Создать БД из трех таблиц. Первая таблица содержит пользователей (имя, фамилия, дата рождения).
        Вторая таблица содержит список товаров, в которой сохранены id пользователей, которые являются владельцами этих
        товаром (название, цена, описание и т.д.). У одного пользователя может быть несколько товаров. Третья таблица -
        у пользователей есть возможность «Лайкать» товары других пользователей.
        В таблице должны храниться пользователи и товары, что им понравились.</p></div>
<div class="button">
    <a href="exer_18.sql" download>
        <button>Скачать дамп базы данных</button>
    </a>
</div>
	
</body>
</html>