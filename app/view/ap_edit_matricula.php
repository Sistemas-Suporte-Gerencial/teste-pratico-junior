<?php
//sujeira embaixo do tapete :(
error_reporting(E_ALL & E_NOTICE & E_WARNING);
/*inclusão dos principais itens da página */
session_start();
$sess = "CUR";
$pag = "ap_pg_matricula.php";// Fazer o link brilhar quando a pag estiver ativa
require_once("../config/main.php");
require_once("../config/valida.php");
require_once("../config/mnutop.php");
require_once("../config/menu.php");
require_once("../config/modals.php");
require_once("../class/class.functions.php");
$fn = new functions();
?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Editar Matricula</h1>
					</div>
					<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Matricula</a></li>
						<li class="breadcrumb-item active">Editar</li>
					</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		<?php		
		extract($_GET); 
		$rs = new recordset();
		$sql =" SELECT 
					*
		FROM sys_matricula a
			JOIN sys_curso b ON a.mat_curId = b.cur_id
			JOIN sys_aluno c ON a.mat_aluId = c.alu_id
			JOIN sys_usuario d ON a.mat_usuId = d.usu_cod		
		WHERE mat_id = ".$matid;        
		$rs->FreeSql($sql);
		$rs->GeraDados(); 
		$curso = $rs->fld("mat_curId");
		$aluno = $rs->fld("mat_aluId");
		?>
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">				
				<div class="card card-secondary card-outline">
					<div class="card-header">					
						<h3 class="card-title">Matricula</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
							<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body" >
						<form role="form" id="FormEditMatricula">  
							<div class="row">							
								<div class="col-sm-1">
									<div class="form-group">
									  <label>#ID:</label>
										<div class="input-group">
											<input type="text" DISABLED  class="form-control" name="mat_id" id="mat_id" value="<?=$rs->fld("mat_id");?>"/>
											<input type="hidden" value="<?=$_SESSION['token'];?>" name="token" id="token"/>										
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->						            						
								<div class="col-sm-3">
									<div class="form-group">
									  <label>#Cadastrado em:</label>
										<div class="input-group">
											<div class="input-group-prepend">
											  <span class="input-group-text"><i class="fas fa-calendar"></i></span>
											</div>
											<input DISABLED class="form-control input-sm text-uppercase" value="<?=$fn->data_hbr($rs->fld("mat_data"));?>"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->																	
								<div class="col-sm-2">
									<div class="form-group">
										<label>Data Inicial:</label>
										<div class="input-group">
											<div class="input-group date" id="calendario" data-target-input="nearest">
												<div class="input-group-append" data-target="#calendario" data-toggle="datetimepicker">
													<div class="input-group-text" ><i class="far fa-calendar-check"></i></div>
												</div>
												<input DISABLED type="text" class="form-control data_br" name="cur_data_ini" id="cur_data_ini" value="<?=$fn->data_br($rs->fld("cur_data_ini"));?>"/>																												
											</div>
										</div>
									</div>
								</div>
								<!-- /.col -->
								<div class="form-group col-sm-2">
									<div class="form-group">
										<label for="rel_df">Data Final:</label>
										<div class="input-group">
											<div class="input-group date" id="calendario1" data-target-input="nearest">
												<div class="input-group-append" data-target="#calendario1" data-toggle="datetimepicker">
													<div class="input-group-text" ><i class="far fa-calendar-check"></i></div>
												</div>
												<input DISABLED type="text" class="form-control  data_br" name="cur_data_fin" id="cur_data_fin" value="<?=$fn->data_br($rs->fld("cur_data_fin"));?>" />																
											</div>									
										</div>		  
									</div>	
								</div>								
								<!-- /.col -->
								<div class="col-sm-3">
									<div class="form-group">
									  <label>#Cadastrado Por:</label>
										<div class="input-group">
											<div class="input-group-prepend">
											  <span class="input-group-text"><i class="fas fa-user"></i></span>
											</div>
											<input DISABLED class="form-control input-sm text-uppercase" value="<?=$rs->fld("usu_nome")?>"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
							</div>
							
							<div class="row">								
								<div class="col-sm-5">
									<div class="form-group">
									  <label for="sel_class">Selecione o Curso:</label>
										<div class="input-group">
											<div class="input-group-prepend">
											  <span class="input-group-text"><i class="fas fa-book-open"></i></span>
											</div>
											<select class="form-control select2bs4" id="sel_curso" name="sel_curso"/>    
												<option value="">Selecione:</option>
												<?php
													$whr = "cur_data_ini >= NOW() OR cur_data_fin > NOW()";
													$rs->Seleciona("*","sys_curso",$whr); //É o mesmo que SELECT campos FROM tabela WHERE condição															 
													while($rs->GeraDados()){ // enquanto gerar dados da pesquisa
													?>
													<option value="<?=$rs->fld("cur_id");?>"<?=($rs->fld("cur_id")==$curso?"SELECTED":"");?>><?=$rs->fld("cur_titulo");?></option>
													<?php
													} 
												?> 
											</select> 
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->									
								<div class="col-sm-5">
									<div class="form-group">
									  <label for="sel_class">Selecione o Aluno:</label>
										<div class="input-group">
											<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
											</div>
											<select class="form-control select2bs4" id="sel_aluno" name="sel_aluno"/>    
												<option value="">Selecione:</option>
												<?php
													$whr = "alu_status ='1'";													
													$rs->Seleciona("*","sys_aluno",$whr); //É o mesmo que SELECT campos FROM tabela WHERE condição															 
													while($rs->GeraDados()){ // enquanto gerar dados da pesquisa
													?>
													<option value="<?=$rs->fld("alu_id");?>"<?=($rs->fld("alu_id")==$aluno?"SELECTED":"");?>><?=$rs->fld("alu_nome");?></option>
													<?php
													} 
												?> 
											</select> 
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->									
							</div>
							<!-- /.row -->  
							<!-- Mensagem  -->
								<div id="mens"></div>
							<!-- /.Mensagem -->	
						</form>
						<!-- /.form -->	
					</div>
					<!-- /.card-body -->
					
					<div class="card-footer">							
						<button type="button" id="btn_EditMatricula" class="btn btn-sm btn-info" type="submit"><i class="fas fa-sync-alt"></i> Alterar</button>
						<a class='btn btn-sm btn-info' data-toggle='tooltip' data-placement='bottom' title='Nova Matricula' href="ap_cad_matricula.php?token=<?=$_SESSION['token']?>"><i class="fa fa-plus"></i> Novo</a>						
						<a href="javascript:history.go(-1);" class="btn btn-sm btn-secondary"><i class="fas fa-hand-point-left"></i> Voltar</a>
					</div>				  					
				</div>
				<!-- /.row -->			
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
    
  <?php require_once("../config/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Select2 -->
<script src="<?=$hosted;?>/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$hosted;?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$hosted;?>/assets/dist/js/adminlte.min.js"></script>
<!-- InputMask Mscara java-->
<script src="<?=$hosted;?>/js/maskinput.js"></script>
<script src="<?=$hosted;?>/js/jmask.js"></script>
<script src="<?=$hosted;?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?=$hosted;?>/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!--Chama o java script -->
<script src="<?=$hosted;?>/js/action_system.js"></script>
<!-- Validation --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })   

  })
</script>
</body>
</html>
