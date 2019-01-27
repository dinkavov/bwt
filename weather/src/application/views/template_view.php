<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Погода</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="#" class="navbar-brand">
			<img src="https://cdn.icon-icons.com/icons2/721/PNG/512/rain_icon-icons.com_62496.png" width="50" height="50" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbar1">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item">
        		<a class="nav-link" href="#">Погода сегодня<span class="sr-only">(current)</span></a>
      		</li>
		    <li class="nav-item active">
		    	<a class="nav-link" href="/">Вход Регистрация</a>
		    </li>
      		<li class="nav-item">
		    	<a class="nav-link" href="#">Фидбеки</a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="/feedback">Обратная связь</a>
		    </li>
    	</ul>
  	</div>
	</nav>
	<div class="container">
	<?php include 'src/application/views/'.$content_view; ?>
	</div>
</body>
</html>