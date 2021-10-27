<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

echo '<h1>Actores</h1>';
$query = 'SELECT 
	   people_fullname, movie_name 
	FROM 
	   people, movie 
	WHERE 
	   people_id = movie_leadactor';

$result = mysqli_query($db, $query) or die (mysqli_error($db));


while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo $people_fullname . ' - ' . $movie_name .'<br>';

 
}
echo '<br>';
echo '<h1>Directores</h1>';

$query2 = 'SELECT 
	   people_fullname, movie_name 
	FROM 
	   people, movie 
	WHERE 
	   people_id = movie_director';

$result = mysqli_query($db, $query2) or die (mysqli_error($db));


while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo $people_fullname . ' - ' . $movie_name .'<br>';

 
}
?>