<!doctype html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Написать функцию сложения массивов</title>
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
        #inputs{
            display: flex;
            flex-direction: column;
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
            display: flex;
            flex-direction: row;
        }
        #first,#second{
            display: flex;
            flex-direction: column;
            margin:30px;
        }
        #center{
            cursor:pointer;
            padding:40px;
            margin-top: 20px;
            padding:10px;
            width:20em;
            border-radius: 5px;
            display: block;
        }
        .result{
            margin:0;
            font-size:2.5em;

        }
    </style>

    <header></header>
    <div id="task"><b>Задание</b><p>Написать функцию сложения массивов.
            Необходимо сделать форму с двумя textarea. В них заполняются данный в виде матрицы. Элементы разделяются через пробел, строки - через ;</p></div>
    <div id="inputs">
        <div id="first" >
            <label for="fmatrix">Введите значение первой матрицы</label>
            <textarea name="fmatrix" id="fmatrix" cols="30" rows="10"></textarea></div>
        <div id="second">
            <label for="smatrix">Введите значение второй матрицы</label>
            <textarea name="smatrix" id="smatrix" cols="30" rows="10"></textarea></div>
    </div>
    <div><p class="result">Результат в консоли</p></div>
    <button id="center">Вычислить</button>
    <script>
        $('button').click(function(){
            $.ajax({
                url:'matrix.php',
                method:'post',
                data:{
                    fmatrix:$('#fmatrix').val(),
                    smatrix:$('#smatrix').val()
                },
                success:function (data) {
                    console.log(data);
                }
            })
        })
    </script>
    </body>
</html>
