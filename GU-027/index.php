<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>#27 - Создать простую страницу в которой будет два блока с текстом и кнопкой load more</title>
    <style>
        #task{
            margin-top: 20px;
            margin-bottom: 30px;
            padding: 20px;
            border:1px dashed darkgrey;
            border-radius: 5px;
            width: 65%;
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

        .first_block,
        .second_block{

            margin:10px;
            /*border:1px solid lightgrey;*/
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            padding:10px;
        }
        .hide,
        .hide2{
            padding-top: 2vh;
            display:none;
            position: fixed;
            text-align:justify;
            width: 32%;
        }

        label {
            background:lightblue;
            padding:5px;
            border-radius:5px;
            box-shadow:2px 3px 4px grey;
            border:1px solid blue;
            cursor:pointer;
        }

        label:active {
            box-shadow:0px 1px 2px grey;
        }

        input[type=checkbox] {
            position: absolute;
            top: -180%;
            left: -180%;
        }
        input[type=button] {
            position: absolute;
            top: -180%;
            left: -180%;
            /* For mobile, it's typically better to position checkbox on top of clickable
            area and turn opacity to 0 instead. */
        }
        /* Toggled State */
        input[type=checkbox]:checked ~ .hide {
            display:block;
        }
        input[type=checkbox]:checked ~ .hide2 {
            display:block;
        }

    </style>
</head>
<body>
<header></header>
<div  id="task"><b>Задание</b><p>Создать простую страницу в которой будет два блока с текстом и кнопкой load more.
        По клику на первую отображаем скрытый текст который уже есть на странице. Сделать все средствами css.</p></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>

    <div class="col-md-4 first_block">
        <p class="lead">Если у Вас возникли ко мне какие-либо вопросы - можете оставить комментарий к этой записи. Все комментарии скрыты</p>
        <div class="slide2">
        <label for="toggle-1">Load More</label>
        <input type="checkbox" id="toggle-1">

        <div class="hide"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam commodi consectetur dolor dolorem eaque est exercitationem inventore ipsam natus nulla qui repellat reprehenderit, vero voluptate! Et fugit nemo ratione! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam commodi consectetur dolor dolorem eaque est exercitationem inventore ipsam natus nulla qui repellat reprehenderit, vero voluptate! Et fugit nemo ratione!</div>
    </div>
    </div>

    <div class="col-md-4 second_block">
        <p class="lead">Если у Вас возникли ко мне какие-либо вопросы - можете оставить комментарий к этой записи. Все комментарии скрыты</p>
        <div class="slide2">
        <label for="toggle-2">Load More</label>
        <input type="checkbox" id="toggle-2">
        <div class="hide2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam commodi consectetur dolor dolorem eaque est exercitationem inventore ipsam natus nulla qui repellat reprehenderit, vero voluptate! Et fugit nemo ratione! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam commodi consectetur dolor dolorem eaque est exercitationem inventore ipsam natus nulla qui repellat reprehenderit, vero voluptate! Et fugit nemo ratione!</div>
    </div>

    </div>
    <div class="col-md-2"></div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>