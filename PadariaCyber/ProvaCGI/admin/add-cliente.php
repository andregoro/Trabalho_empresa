<!DOCTYPE html>
<html lang="pt">

<?php
require_once("sessao.php");
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Life-Care_Cadastro de Cliente</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
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
                <a href="index-2.html" class="logo">
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
                        <a class="dropdown-item" href="#">Minha conta</a>
                        <a class="dropdown-item" href="#">Edita conta</a>
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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Cadastro Cliente</h4>
                    </div>
                </div>
                <form action="inserir_modificar.php?acao=cadastra" method="post">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nome<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="nome" name="nome" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Foto<span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" id="foto" name="foto" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input type="text" id="CPF" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name="CPF" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Data de nascimento</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" id="data" name="data" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Sexo:</label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="sexo" class="form-check-input" id="rbMasculino" value="M" checked>Masculino
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="sexo" class="form-check-input" id="rbFeminino" value="F">Feminino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control " id="endereco" name="endereco" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telefone </label>
                                                <input type="text" id="telefone" name="telefone" class="form-control" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" required/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Plano de saude</label>
                                                <select id="plano_saude" name="plano_saude" class="form-control">
                                                    <option value="Breadesco">Breadesco</option>
                                                    <option value="Plano 1">Plano 1</option>
                                                    <option value="Plano Fiat">Plano Fiat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Observações</label>
                                            <textarea class="form-control" rows="3" cols="30" id="observacoes" name="observacoes"></textarea>
                                        </div>
                                    </div>
                                    <div class="m-t-20 text-center">

                                        <button class="btn btn-primary submit-btn">Salvar</button>
                                        <button class="btn btn-primary submit-btn"><a href="cliente.php" style="color: #ffffff">Sair</a></button>
                                    </div>

                                </div>
                            </div>
                </form>
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


<!-- add-cliente24:07-->

</html>