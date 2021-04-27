<?php

include_once("conexao1.php");

$sql = "SELECT NrAtendimento, CodImovel, DataAtendimento, CodUsuario, DescAtendimento FROM ImovelAtend
WHERE CodSitAtend = 1 AND CodTipoAtend = 248
ORDER BY DataAtendimento;";

$consulta1 = mysqli_query($conexao1, $sql);

$registros1 = mysqli_num_rows($consulta1);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Qualificação de Herdeiros</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Qualificação de Herdeiros</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Cidades
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href=bc.php>
          <i class="fas fa-fw fa-table"></i>
          <span>Balneário Camboriú</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href=ita.php>
          <i class="fas fa-fw fa-table"></i>
          <span>Itajaí</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href=jve.php>
          <i class="fas fa-fw fa-table"></i>
          <span>Joinville</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href=sj.php>
          <i class="fas fa-fw fa-table"></i>
          <span>São José</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href=ipm.php>
          <i class="fas fa-fw fa-table"></i>
          <span>Itapema</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href=sfs.php>
          <i class="fas fa-fw fa-table"></i>
          <span>São Francisco do Sul</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"></nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Balneário Camboriú</h1>
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                          print "$registros1";
                                                                          ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- Solicitações -->





          <?php

while ($exibirRegistros = mysqli_fetch_array($consulta1)) {

  $NrAtendimento = $exibirRegistros[0];
  $codImovel = $exibirRegistros[1];
  $dataAtendimento = $exibirRegistros[2];
  $codUsuario = $exibirRegistros[3];
  $descAtencimento = $exibirRegistros[4];
  $dataConvertida = date('d/m/Y', strtotime($dataAtendimento));

  print '<div class="card shadow mb-4">';
  print '<div class="card-header py-3">';
  print '<h6 class="m-0 font-weight-bold text-primary">Data: ';
  print "$dataConvertida";
  print '</h6>';
  print '<h6 class="m-0 font-weight-bold text-primary">Usuário: ';
  print "$codUsuario";
  print '</h6>';
  print '<h6 class="m-0 font-weight-bold text-primary">Nr Atendimento: ';
  print "$NrAtendimento";
  print '</h6>';
  print '</div>';
  print '<div class="card-body" style="color:black;">';
  print '<div class="row">';
  print '</div>';
  print '<div class="row">'; //abre div grandona
  print '<div class="col" style="color:black; text-align:justify;">'; //abre div para o formulário

  //corpo da div e do form
  print
  '<form>

  <div class="form-group">
  <label for="codImovel" class="control-label"><strong>Código do Imóvel:</strong></label>
  <div class="form-control-static">
     <label style="color:black; text-align:justify;">';
  echo utf8_encode($codImovel);
  print '</label>
  </div>
  </div>


  <div class="form-group">
  <label for="codImovel" class="control-label"><strong>Observação:</strong></label>
  <div class="form-control-static">
     <label style="color:black; text-align:justify;">';
  echo utf8_encode($descAtencimento);
  print '</label>
  </div>
  </div>
  
  </form>';


  print '</div>'; //fecha div
  print '</div>';
  print '</div>';
  print '</div>';
}



mysqli_close($conexao1);
?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Miraceli Bonjardim 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>