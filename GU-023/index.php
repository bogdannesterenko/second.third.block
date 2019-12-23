<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#23 - Работа с array + object</title>
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
        .consol{
            font-size:2em;
            font-family: Georgia;
        }
    </style>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b>
    <p>Работа с array + object: - Создать массив и создать объект. Посмотреть их длину .length - Создать функцию которая будет перебирать значения и выводить их в консоль. - Удалить значение с порядковым номером 3 в созданной ранее функции. - Посмотреть длину .length для массива и для объекта после удаления. - Создать массив или объект в котором ключ будет динамическим.</p></div>
<div class="consol"><p>Смотри консоль</p></div>
<script>
    /*Создать массив и создать объект. Посмотреть их длину .length*/
    let parts = {
        1 : 'one',
        2 : 'two',
        3 : {
            1 : 'text',
            2 : 'mda'}
    };
    console.log(Object.keys(parts).length);

    let arr = [
        'Апельсин',
        'Мондарин',
        'Банан',
        'Дыня'
    ];
    console.log(arr.length);
   /* Создать функцию которая будет перебирать значения и выводить их в консоль.*/
    /*Удалить значение с порядковым номером 3 в созданной ранее функции.*/
    /*Посмотреть длину .length для массива и для объекта после удаления.*/
    let  obj= {
        name:'Mill',
        age:25,
        sex:'man',
        think:'good'
    };

     function showElements(obj) {

        for(let key in obj) {
            console.log(key, obj[key]);
            delete obj.sex;

        }
     }
    showElements(obj);
    /*Создать массив или объект в котором ключ будет динамическим.*/
    var i = 1000;
    var type = 'name';
    var o = {
        [type + '_' + i++]: "One",
        [type + '_' + i++]: "Two",
        [type + '_' + i++]: "Three",
    }
    console.log(o);

</script>
</body>
</html>