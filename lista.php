<?php

# Substitua abaixo os dados, de acordo com o banco criado

# O hostname deve ser sempre localhost 
$hostname = "localhost";
$user = "root";
$password = "";
$database = "estudo_trabalho";

# Conecta com o servidor de banco de dados 
$conn =new mysqli($hostname, $user, $password,$database);
if ($conn->connect_error) {
    die(' Erro na conexão ');
}

$sql = "select * from city"; //sql
$result=$conn->query($sql);//

while($row = $result->fetch_assoc()) {
    echo $row["cityId"]."<br>";   
}
echo "Connected ok";

?>
<?php
//$g=$_GET;
//echo json_decode($_SERVER['REQUEST_METHOD']);
//foreach($_GET as $key => $value){
//	echo $value;
//}
//	$usuarios=[
//		"Andre",
//		"Luidi",
//		"Rica",
//		"Pedro"
//	];
//	echo json_decode($usuarios);

?>
