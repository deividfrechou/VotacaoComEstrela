<?PHP 
include ("conecta.php");
$id=1;
$consulta = mysqli_query($conexao, "SELECT * FROM votar WHERE id =  ".$id."");
$row = mysqli_fetch_array($consulta);

echo "<table border=1>";
echo "<tr><td>Ruim</td><td>".$row['ruim']."</td><tr>";
echo "<tr><td>Regular</td><td>".$row['regular']."</td><tr>";
echo "<tr><td>Bom</td><td>".$row['bom']."</td><tr>";
echo "<tr><td>Muito Bom</td><td>".$row['mbom']."</td><tr>";
echo "<tr><td>Muito Ótimo</td><td>".$row['motimo']."</td><tr>";
echo "<br><a href='votar.php'>Votar novamente</a><br><br>";

?>