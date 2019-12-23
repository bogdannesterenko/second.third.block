<!doctype html>
<html>
<head>
    <meta charset = 'UTF-8'>
    <title>#19 - Защита от SQL injection</title>
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
    form{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    form>*{
        margin-top: 20px;
    }
    input{
        width: 100%;
        background-color: limegreen;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        padding:10px;
        border-radius: 5px;
        display: block;
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
</style>
<header></header>
<div id="task"><b>Задание</b><p> Необходимо данные сохранять в базу данных, предварительно защитив их от sql injection.</p></div>
<form action="action.php" method="post">
    <label for="text">Введите какой-то текст</label>
    <textarea name="text" id="text" cols="60" rows="20" placeholder="Введите текст"></textarea>
    <input type="submit" value = 'Создать файл'>
</form>
<script>
    $("input[type='submit']").click(function (event) {
        let text = $('textarea').val();
        if(!text){
            alert('Введите текст!');
            event.preventDefault();
        }
    })
</script>
</body>
</html>