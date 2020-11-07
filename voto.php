<meta  http-equiv="Refresh" content="2;URL=votoResultado.php">
<?PHP 
include ("conecta.php");
$codigo=$_GET['cod'];
$id=1;
$consulta = mysqli_query($conexao, "SELECT * FROM votar WHERE id =  ".$id."");
$row = mysqli_fetch_array($consulta);

switch($codigo){
  case 1:
    $result=$row['ruim']+1;
    $query = "UPDATE votar SET ruim = '".$result."' WHERE id = '".$id."' ";
    mysqli_query($conexao,$query);
    break;
  case 2:
    $result=$row['regular']+1;
    $query = "UPDATE votar SET regular = '".$result."' WHERE id = '".$id."' ";
    mysqli_query($conexao,$query);
    break;
  case 3:
    $result=$row['bom']+1;
    $query = "UPDATE votar SET bom = '".$result."' WHERE id = '".$id."' ";
    mysqli_query($conexao,$query);
    break;
  case 4:
    $result=$row['mbom']+1;
    $query = "UPDATE votar SET mbom = '".$result."' WHERE id = '".$id."' ";
    mysqli_query($conexao,$query);
    break;		  
  case 5:
    $result=$row['motimo']+1;
    $query = "UPDATE votar SET motimo = '".$result."' WHERE id = '".$id."' ";
    mysqli_query($conexao,$query);
    break;		  
  default:
    echo "Algo deu errado";
    break;
}
?>