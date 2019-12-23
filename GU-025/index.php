<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#25 - Подключение google maps</title>
    <style>

        #task{
            margin-top: 20px;
            margin-bottom: 20px;
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
        #map {
            width: 50%;
            height: 400px;
        }
    </style>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b><p>Подключить google maps и создать на ней маркер, на любой произвольный объект.</p></div>
<div id="map"></div>
<script>
    function initMap() {
        let opt = {
            center: {lat: 47.836220, lng: 35.106023},
            zoom: 15,
        };
        var map = new google.maps.Map(document.getElementById("map"), opt);
        var uluru = {lat: 47.836220, lng: 35.106023};
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZBwQ03KFr5Gc9COrfgcqs0HLzpXIDlY&callback=initMap"
        async defer></script>
</body>
</html>