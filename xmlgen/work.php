<!DOCTYPE html>
<html>
	<head>
		<title>XMLGEN</title>
	    <meta charset="utf-8">
	    <link rel="shortcut icon" href="title.png" type="image/image">
	    <link rel="stylesheet" type="text/css" href="assets/css/work.css">
	</head>
	<body>
		<div class="wrapper">
			<h1>Введите данные которые необходимо сгененировать в xml документ</h1>
			<a href="index.php">Главная страница</a>
			<form action="gen.php" method="POST">
				<input type="" name="" placeholder="Id">
				<input type="" name="" placeholder="Доступность товара">
				<input type="" name="" placeholder="Ссылка на страницу товара (желательно)">
				<input type="" name="" placeholder="Название товара">
				<input type="" name="" placeholder="Старая цена (желательно)">
				<input type="" name="" placeholder="Цена товара">
				<input type="" name="" placeholder="Id валюты (810 для россии)">
				<input type="" name="" placeholder="Id категории">
				<input type="" name="" placeholder="Ссылка на картинку">
				<input type="" name="" placeholder="Производитель">
				<input type="" name="" placeholder="Код производителя">
				<input type="" name="" placeholder="Модель товара">
				<input type="" name="" placeholder="Описание товара">
				<input type="" name="" placeholder="Штрих-код">
			<!-- 	<input type="" name="" placeholder="">
				<input type="" name="" placeholder="">
				<input type="" name="" placeholder="">
				<input type="" name="" placeholder="">
				<input type="" name="" placeholder="">
				<input type="" name="" placeholder=""> -->
				<input class="submit" type="submit" name="gen" value="Генерировать">
				<!-- <button id="gen">Генерировать</button> -->
			</form>
		</div>

	</body>
</html>
