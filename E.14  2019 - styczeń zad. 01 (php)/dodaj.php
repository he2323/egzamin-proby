<?php
$title = $_POST["tytul"];
$genres = $_POST["gatunek"];
$year = $_POST["year"];
$rating = $_POST["rating"];
$username = 'root';
$password = '';
$db = 'dane';
$conn = mysqli_connect('localhost', $username, $password, $db);

$sql = "INSERT INTO `filmy`( `gatunki_id`, `tytul`, `rok`, `ocena`, rezyserzy_id) VALUES ($genres, '$title', ".intval($year).",". intval($rating).", 1)";
echo "sql done";
if(mysqli_query($conn, $sql)){
    echo "Film $title został dodany do bazy";
}else echo "Error: " . $sql . "<br>" . mysqli_error($conn);
mysqli_close($conn);





?>