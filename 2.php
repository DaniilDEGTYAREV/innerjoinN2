<meta charset="utf-8">
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	$query = mysqli_query($connect, "SELECT * FROM people INNER JOIN music ON people.music_id = music.id");
	for($i = 0; $i < $query->num_rows; $i++){
		$result = $query->fetch_assoc();
		echo $result['name'];
		echo $result['people'];
	} 


		
?>