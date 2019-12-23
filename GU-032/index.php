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
        #inputs{
            margin-top: 20px;
            width: 60%;
            border: 1px dashed grey;
            background-color: whitesmoke;
            padding:20px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #inputs>input{
            outline:none;
            padding: 5px;
            border-radius: 4px;
            border:1px ridge darkgrey;
        }
        #inputs>*{
            margin-top: 10px;
        }
        #inputs>input:focus{
            filter:drop-shadow(0 0  3px darkslategrey);
        }
        button{
            width: 40%;
            background-color: lightgreen;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            padding:10px;
            border-radius: 5px;
            display: block;
        }
        #result{
            display: none;
            width: 40%;
            padding:20px;
            border-radius: 8px;
            background-color: #f8d7da;
            border:1px solid red;
            text-align: center;
            color:#721c24;
        }
    </style>

    <header></header>
    <div id="task"><b>Задание</b><p>- Создать форму и обработчик для нее. Если пользователь ввел неправильные данные, должна вернуться ошибка валидации и соответствующий статус. Данные должны отправляться через AJAX и сохраняться в базу данных.<br/>
            - Создать простое api. Которое будет отдавать данные всех пользователей (см пункт 3) так же иметь возможность удалить данные через post запрос.<br/>
            - Создать отдельный сайт. В котором данные должны получаться через curl с api, которое было создано ранее.</p></div>
    <div id="inputs">
        <label for="name">Имя</label>
        <input type="text" id = 'name' name = 'name'>
        <label for="surname">Фамилия</label>
        <input type="text" id = 'surname' name = 'surname'>
        <label for="age">Возраст</label>
        <input type="number" id = 'age' name = 'age'>
        <button>Отправить</button>
        <div id="result"><span>Ошибка</span></div>
    </div>
    <script>
        $('button').click(function(event){
            let name = $('#name').val(),
                surname = $('#surname').val(),
                age = $('#age').val();
            if(!(name&&surname&&age)) {
                $('#result').css({'display':'block'});
                $('#result').text('Заполните все поля!');
                event.preventDefault();
                return;
            }
            $.ajax({
                url:'request.php',
                method:'post',
                data:{
                    name:name,
                    surname:surname,
                    age:age
                },
                success:function(data){
                    if(data=='200'){
                        $('#result').css({'display':'block'});
                        $('#result').text('Успешно добавлено');
                        $('#result').css({'background-color':'#28a745'});
                        $('#result').css('color','white');
                    }
                    else{
                        $('#result').css({'display':'block'});
                        $('#result').text('Ошибка подключения к бд');
                        $('#result').css('background-color', '#f8d7da');
                        $('#result').css('color', '#721c24');
                    }
                }
            })
        })
    </script>
    </body>
</html>