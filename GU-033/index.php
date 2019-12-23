<?php require_once 'action.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>#33 - Создать форму с неограниченной возможностью добавления инпутов</title>
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
            background-color: #eff5f5;
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

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script
</head>
<body>
<header></header>
<div id="task"><b>Задание</b>
    <p>Создать форму с неограниченной возможностью добавления инпутов.
        Так же для каждой добавленной строки — должна быть иконка удалить с работающим функционалом.
        Засабмитить эту форму. Придумать структуру БД для хранения такой информации.
        Сохранить форму в БД.</p></div>
        <div class="container-fluid" style="background: #eff5f5;  height: 91vh;">
            <div class="row" style="height: 50px;"></div>
            <div class="row justify-content-around">
                <div class="col-md-4"></div>
                <div class="col-md-4">
            <form method="post" action="action.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="adress">Adress</label>
                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Adress">
                </div>

                <div class="form-group" id="div_info" >
                    <p>Book which you read</p>
                    <label for="book1" style="padding-top: 10px">Book #1</label>
                    <input type="text" class="form-control" name="book[]" id="book" placeholder="Book">

                </div>
                <button type="button" id="add_button" class="btn btn-info">More books</button>
                <button type="button" id="delete_button" class="btn btn-danger">Less books</button>
                <div style="padding-top: 25px">
                    <button type="submit" id="" class="btn btn-success" style="width: 100%">Save</button>
                </div>
            </form>
        
        </div>
            <div class="row justify-content-around" style="padding-top:20px;"
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="alert alert-danger" id="error" role="alert" style="display: none;">
                    <div class="text-center" id="error_message">

                    </div>
                </div>
            </div>
            <div class="alert alert-success" id="success" role="alert" style="display: none">
                <div class="text-center" id="success_message">
                </div>
            </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {

                var wrapper         = $("#div_info");
                var add_button      = $("#add_button");
                var delete_button      = $("#delete_button");

                var x = 1;
                $(add_button).click(function(e){
                    e.preventDefault();
                    $(wrapper).append('<input type="text" class="form-control  inputs-books" name="book[]" placeholder="Book">');
                });

                delete_button.on("click", function(e) {
                    e.preventDefault();
                    wrapper.children("input:last").remove();
                })
            });

        </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>