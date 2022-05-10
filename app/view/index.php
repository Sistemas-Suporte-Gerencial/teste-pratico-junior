<?php
$sess = "HOME";
$pag = "home.php";
require_once("../config/valida.php");
require_once("../config/main.php");
require_once("../config/mnutop.php");
require_once("../config/menu.php");
require_once("../config/modals.php");
require_once("../class/class.functions.php");
require_once("../controller/sys_data_widgets.php");
require_once("../model/recordset.php");
$fn = new functions();
$rs = new recordset();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
<!-- -----------------------------------------------------------------------------------------------------
//Administrador  //////////////////////////////////////////////////////////////////////////////////////||
//======================================================================================================= -->
            
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-<?=$cordahboard;?>">
                        <div class="inner">
                            <h3><?=$empresa;?></h3>

                            <p>Empresas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-city nav-icon"></i>                            
                        </div>
                        <a href="<?=$hosted;?>/view/sys_pg_empresa.php?token=<?=$_SESSION['token'];?>"
                            class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-<?=$cordahboard;?>">
                        <div class="inner">
                            <h3><?=$departamentos;?></h3>

                            <p>Departamentos</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-building"></i>
                        </div>
                        <a href="<?=$hosted;?>/view/sys_pg_departamento.php?token=<?=$_SESSION['token'];?>"
                            class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-<?=$cordahboard;?>">
                        <div class="inner">
                            <h3><?=$usuarios?></h3>

                            <p>Usuarios</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <a href="<?=$hosted;?>/view/sys_pg_usuario.php?token=<?=$_SESSION['token'];?>"
                            class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>                
                <!-- ./col -->
            </div>
            <!-- /.row -->           
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php require_once("../config/footer.php"); ?>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= $hosted; ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= $hosted; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $hosted; ?>/assets/dist/js/adminlte.js"></script>
</body>

</html>