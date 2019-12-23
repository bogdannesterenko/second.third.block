<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#24 - Добавить аккордеон на страница с контентом</title>
</head>
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
    header {
        margin-top: 0;
        width: 100%;
        height: 50px;
        background-color: mediumslateblue;
    }
    .container {
        max-width: 700px;
        width:40%;
        margin: 0 auto;
        padding-top: 20px;
    }
    .panel {
        margin-bottom: 5px;
    }
    .panel-title {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        font-size: 16px;
        color: #333;
        border-radius: 4px;
        font-family: 'Helvetica';
        font-weight: 300;
        cursor: pointer;
        margin-bottom: 5px;
    }
    .panel-body {
        padding: 15px;
        border: 1px solid #ddd;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        display: none;
        margin-bottom: 10px;
        background: #fff;
    }
    .panel-active {
        margin-bottom: 0;
        border-bottom: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        text-decoration: none;
    }
    .active {
        display: block;
    }
</style>
<body>
<header></header>
<div id="task"><b>Задание</b><p>Добавить аккордеон на страницу с контентом. При открытии одного блока, другой закрывается. Скрипт должен быть сделан с учетом, что количество блоков в аккордеоне может быть динамическим. Т.е. должно одинаково работать, для любого количества блоков.</p></div>

<div class="container">
    <div class="panel-group">

        <h3 class="panel-title">Group Item #1</h3>
        <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsam necessitatibus, omnis quaerat quam ratione sint. Aliquid corporis dolore, doloremque eligendi explicabo harum ipsam quisquam sequi sunt ullam. Ipsa, repellat.
        </div>
        <h3 class="panel-title">Group Item #2</h3>
        <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsam necessitatibus, omnis quaerat quam ratione sint. Aliquid corporis dolore, doloremque eligendi explicabo harum ipsam quisquam sequi sunt ullam. Ipsa, repellat.
        </div>

        <h3 class="panel-title">Group Item #3</h3>
        <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsam necessitatibus, omnis quaerat quam ratione sint. Aliquid corporis dolore, doloremque eligendi explicabo harum ipsam quisquam sequi sunt ullam. Ipsa, repellat.
        </div>

        <h3 class="panel-title">Group Item #4</h3>
        <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsam necessitatibus, omnis quaerat quam ratione sint. Aliquid corporis dolore, doloremque eligendi explicabo harum ipsam quisquam sequi sunt ullam. Ipsa, repellat.
        </div>

    </div>
</div>
<script>
    let panelItem = document.querySelectorAll('.panel-title'),
        bodyItem = document.querySelectorAll('.panel-body');
    panelItem.__proto__.forEach = [].__proto__.forEach;

    let activePanel;
    panelItem.forEach(function(item, i, panelItem) {
        item.addEventListener('click', function(e) {

            //show new thingy;
            this.classList.add('panel-active');
            this.nextElementSibling.classList.add('active');

            //hide old thingy
            if (activePanel) {
                activePanel.classList.remove('panel-active');
                activePanel.nextElementSibling.classList.remove('active');

            }
            //update thingy
            activePanel = (activePanel === this) ? 0 : this;
        });
    });

</script>
</body>
</html>