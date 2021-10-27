<?php
$db = mysqli_connect('localhost', 'root', 'root') or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = "INSERT INTO people (people_id, people_fullname, people_isactor, people_isdirector) VALUES(10, 'Victor Fernandez', 1, 0), (8, 'Aaron Martinez', 1, 0), (9, 'Daniel Castillo', 0, 1)";
$query2 = "INSERT INTO movie (movie_id, movie_name, movie_type, movie_year, movie_leadactor, movie_director) VALUES(4, 'Forrest Gump', 2, 1994, 7, 9), (5, 'Spy kids', 8, 2001, 8, 9), (6, 'Transformers', 7, 2008, 7, 9)";
$query3 = "INSERT INTO movietype (movietype_id, movietype_label) VALUES(9, 'Thriller'), (10, 'Drugs'), (11, 'Sex')";


mysqli_query($db,$query) or die (mysqli_error($db));
mysqli_query($db,$query2) or die (mysqli_error($db));
mysqli_query($db,$query3) or die (mysqli_error($db));

echo 'Inserts actualizados!';
?>