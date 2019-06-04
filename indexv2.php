<!doctype html>
<html class="no-ja " lang="pl">
<head>
	<title>Kino Hades</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Oglądaj swoje ulubione filmy w naszym kinie!" />
	<meta content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" conent="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="timer.js"></script>
	<script type="text/javascript" src="slider1to5.js"></script>
</head>

<body onload="count(),changeslide()">
	<div id="container">
		<div id="logo">
			<a href="index2.html"> <h1>KINO HADES</h1> </a>
		</div>
		
		<div id="nav">
			<h4>Kategorie:</h4>
			<a href="spiderman.html"> Spiderman 3 </a>
			<br></br>
			<a href="avengers.html"> Avengers </a>
			<br></br>
			<a href="antman.html"> Antman </a>
			<br></br>
			<a href="strangerthings.html"> Stranger Things </a>
			<br></br>
			<a href="twd.html"> The Walking Dead </a>
		</div>
		
		<div id="content">
			<h2> Witamy w Hadesie! Zapraszamy do rezerwacji biletów! </h2>
			<p><i>Tutaj z pewnością każdy znajdzie coś dla siebie, wystarczy wybrać tytuł z listy po lewej stronie,
			bądź skorzystać z wyszukiwarki po prawej stronie strony. Wystarczy wybrać tytuł oraz zamówić bilet.</i></p>
			
				<span onclick="setslide(1)" style="cursor:pointer;">[1]</span>
				<span onclick="setslide(2)" style="cursor:pointer;">[2]</span>
				<span onclick="setslide(3)" style="cursor:pointer;">[3]</span>
				<span onclick="setslide(4)" style="cursor:pointer;">[4]</span>
				<span onclick="setslide(5)" style="cursor:pointer;">[5]</span>	
		
			<div id="slider"></div>
			
		</div>
		
		<div id="ad">
			<h4>Reklama</h4>
			<img src="" />
		</div>
		
		<div id="footer">
			Najlepsze filmy - kino Hades! &copy; Paweł Tabor, Adam Serafin
			<div id="clock"></div>
		</div>
		
	</div>
</body>