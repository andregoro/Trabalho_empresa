<!DOCTYPE html>
<html lang="pt">
<?php
require_once("sessao.php");
require_once("config.php");
$cod=(isset($_GET['cod'])) ? $_GET['cod'] : 0;
if($cod !=0){
    $query="delete from paciente where idPaciente='".$cod."'";
    mysqli_query($conexao,$query) or die(mysqli_error($conexao));
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Life-Care_Listagem de cliente</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <!--<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Life-Care</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">



                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">Minha conta</a>
                        <a class="dropdown-item" href="edit-profile.html">Edita conta</a>
                        <!--<a class="dropdown-item" href="settings.html">Configurações</a>-->
                        <a class="dropdown-item" href="sair.php">Sair</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Minha conta</a>
                        <a class="dropdown-item" href="#">Edita conta</a>
                        <!--<a class="dropdown-item" href="settings.html">Configurações</a>-->
                        <a class="dropdown-item" href="sair.php">Sair</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard"></i> <span>Painel de controle</span></a>
                        </li>
                        <li class="active">
                            <a href="cliente.php"><i class="fa fa-user"></i> <span>Clientes</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Listagem de clientes</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-cliente.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Cadastrar</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Cliente</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table datatable mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                        <th>CPF</th>
                                        <th>Data&nbspde&nbspNascimento</th>
                                        <th>Sexo</th>
                                        <th>Endereço&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                        <th>Telefone&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                        <th>Plano de saude&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                        <th>Observaçoes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                        <th>Data&nbspde&nbspCadastro</th>
                                        <!-- <th>Observaçoes&nbsp</th> -->

                                        <th class="text-right">Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //require_once("../php/includes/config.php");
                                    $sql = "select * from paciente";
                                    $resultado = mysqli_query($conexao, $sql);

                                    while ($row = mysqli_fetch_array($resultado)) {
                                        echo    "<tr>";
                                        echo    "<td>" . $row[0] . "</td>";
                                        echo    "<td>" . $row[1] . "</td>";
                                        echo    "<td>" . $row[2] . "</td>";
                                        echo    "<td>" . $row[3] . "</td>";
                                        echo    "<td>" . $row[4] . "</td>";
                                        echo    "<td>" . $row[5] . "</td>";
                                        echo    "<td>" . $row[6] . "</td>";
                                        echo    "<td>" . $row[8] . "</td>";
                                        echo    "<td>" . $row[9] . "</td>";
                                        echo    "<td>" . $row[10] . "</td>";
                                        echo    "<td class='text-right'>";
                                        echo        "<div class='dropdown dropdown-action'>";
                                        echo            "<a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>";
                                        echo            "<div class='dropdown-menu dropdown-menu-right'>";
                                        echo                "<a class='dropdown-item' href='edit-cliente.php?ids=".$row[0]."'><i class='fa fa-pencil m-r-5'></i>Editar</a>";//data-target='#delete_cliente'
                                        echo                "<a class='dropdown-item' href='cliente.php?cod=".$row[0]."'  data-toggle='modal' ><i class='fa fa-trash-o m-r-5'></i> Excluir</a>";
                                        echo            "</div>";
                                        echo        "</div>";
                                        echo    "</td>";
                                        echo "</tr>";
                                    }

                                    ?>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- cliente23:19-->

</html>