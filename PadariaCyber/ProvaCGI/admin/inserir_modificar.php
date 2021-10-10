<?php
require_once("config.php");
require_once("sessao.php");
$acao=(isset($_GET['acao'])) ? $_GET['acao'] : 0;
$ids=(isset($_GET['ids'])) ? $_GET['ids'] : 0;
$nome=(isset($_POST['nome'])) ? $_POST['nome'] : 0;
$cpf=(isset($_POST['CPF'])) ? $_POST['CPF'] : 0;
$data=(isset($_POST['data'])) ? $_POST['data'] : 0;
if($data!=0){
    $data_nascimento=date('Y-m-d', strtotime($data));
}else{
    $data_nascimento=0;
}
$sexo=(isset($_POST['sexo'])) ? $_POST['sexo'] : 0;
$endereco=(isset($_POST['endereco'])) ? $_POST['endereco'] : 0;
$telefone=(isset($_POST['telefone'])) ? $_POST['telefone'] : 0;
$foto=(isset($_POST['foto'])) ? $_POST['foto'] : 0;
$plano_saude=(isset($_POST['plano_saude'])) ? $_POST['plano_saude'] : 0;
$observacoes=(isset($_POST['observacoes'])) ? $_POST['observacoes'] : 0;

if("modifica"==$acao){

    if(0!=$nome||0!=$cpf||0!=$data_nascimento||0!=$sexo||0!=$endereco||0!=$telefone||0!=$foto||0!=$plano_saude||0!=$observacoes){
        $query="update paciente SET nome='$nome',cpf='$cpf',data_nascimento='$data_nascimento',sexo='$sexo',endereco='$endereco',telefone='$telefone',foto='$foto',plano_saude='$plano_saude',observacoes='$observacoes' where idPaciente='$ids'";
        $s=mysqli_query($conexao,$query) or die(mysqli_error($conexao));
        if($s){
            header("location:cliente.php");
        }
    }
}else{
    if(0!=$nome||0!=$cpf||0!=$data_nascimento||0!=$sexo||0!=$endereco||0!=$telefone||0!=$foto||0!=$plano_saude||0!=$observacoes){
        $query="insert into paciente(nome,cpf,data_nascimento,sexo,endereco,telefone,foto,plano_saude,observacoes,data_cadastro) value('$nome','$cpf','$data_nascimento','$sexo','$endereco','$telefone','$foto','$plano_saude','$observacoes',now())";
            mysqli_query($conexao,$query) or die(mysqli_error($conexao));
            echo "teste";
            header("location:cliente.php");

    }
}
#echo "<td>".$dado['id']."</td>". "<td>".$dado['nome']."</td>". "<td>".$dado['Cpf']."</td>"."<td>".$dado['Data_nascimento']."</td>". "<td>".$dado['sexo']."</td>". "<td>".$dado['endereço']."</td>"."<td>".$dado['Telefone']."</td>". "<td>".$dado['Foto']."</td>". "<td>".$dado['Plano_saude']."</td>"."<td>".$dado['Observaçoes']."</td>". "<td>".$dado['Data_cadastro']."</td>";