<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>#31 - Добавить колонку «Владелец»</title>
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
<div id="task"><b>Задание</b><p>В имеющуюся таблицу где мы выводим список товаров — добавить колонку «Владелец» и вывести туда имя и фамилию пользователя, которому принадлежит товар.</p></div>
<div class="row justify-content-around">
    <div class="col-md-2"></div>
    <div class="text-main col-md-8">
        <p class="text-name">Используем запрос MySql</p>
        <p class="text-sql">SELECT owners.id, owners.name,owners.last_name,product_list.user_id, product_list.title FROM owners join product_list on owners.id=product_list.user_id</p>
    </div>
    <div class="col-md-2"></div>
</div>
<div>
    <a href="exer_31.sql" download>
        <button>Скачать дамп базы данных</button>
    </a>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>