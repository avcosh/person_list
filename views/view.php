<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список персон максимального возраста</title>
	<meta name="description" content="Список персон максимального возраста">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
</head>
<body>
<header>
    <h1>Список персон максимального возраста</h1>
</header>
<section>
    <p>
	    Список персон максимального возраста:
		<?php 
		    foreach($age as $item):?>
			    (<?=$item?>)
		<?php endforeach ?>
	</p>
	<p>	
	    <table class="table">
        <thead>
        <tr>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Возраст</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($persons_list as $person):?>
        <tr>
            <td><?=$person->lastname?></td>
            <td><?=$person->firstname?></td>
            <td><?=$person->age?></td>
        </tr>
            <?php endforeach ?>
        </tbody>
        </table>
    </p>
</section>
<footer>
</footer>
<script src="public/bootstrap/jquery.js"> </script>
<script src="public/bootstrap/js/bootstrap.js"> </script>
</body>
</html>


