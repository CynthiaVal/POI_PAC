<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Sistema Poi - Pac</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-center" href="pac.php">Plan Anual de Contrataciones</a>
            </div>
            <!-- /.navbar-header -->
             <ul class="nav navbar-nav navbar-center">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="../../index.html"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li class="active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">POI <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="active"><a  href="index.php">POI 2014 </a></li>
                        <li class="active"><a href="index.php">POI 2015</a></li>
                        <li class="active"><a href="index.php">POI 2016</a></li>

                      </ul>
                    </li>
                    <li class="active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">PAC <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="active"><a  href="pac.php">PAC 2014 </a></li>
                        <li class="active"><a href="pac.php">PAC 2015</a></li>
                        <li class="active"><a href="pac.php">PAC 2016</a></li>

                      </ul>
                    </li>
                    
                   
                </ul>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Usuario</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="pac.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Fuente de Financiamiento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fuente.php">Recursos Ordinarios</a>
                                </li>
                                <li>
                                    <a href="fuente1.php">Recursos Directamente Recaudados</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tipo.php"><i class="fa fa-coffee fa-fw"></i> Tipo de recurso<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="bienes.php">Compra de Bienes </a>
                                </li>
                                <li>
                                    <a href="servicios.php">Contratación de Servicios</a>
                                </li>
                                <li>
                                  <a href="libros.php">Libros y textos para bibliotecas</a>
                                </li>
                                <li>
                                  <a href="maquiraria.php">Maquinarias Equipo Y mobiliario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="pro_recurso.php"><i class="fa fa-calendar fa-fw"></i> Programación Trimestral </a>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-open-o fa-fw"></i> Actividades <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <?php
                                include("conexion.php");
                                $proyecto=array();
                                $query = "call ver_actividad()";
                                $result = $conexion->query($query);
                                while($row = mysqli_fetch_row($result))
                                {
                                    $actividad[] = $row;
                                }

                                mysqli_free_result($result);
                                $conexion->next_result();
                                                              

                                for ($i=0;$i<count($actividad);$i++)
                                {
                                    if($i==0 and $actividad[$i][0]=='?ACT01'){
                                        echo

                                        "
                                        <li>
                                            <a href='ac_recurso.php?act=ACT01'><h6>".utf8_encode($actividad[$i][1])."</h6></a>
                                        </li>";

                                    }else{
                                    echo

                                        "
                                        <li>
                                            <a href='ac_recurso.php?act=".$actividad[$i][0]."'><h6>".utf8_encode($actividad[$i][1])."</h6></a>
                                        </li>";

                                      }
                                }

                                $conexion->close(); 
                              ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Plan Anual de contrataciones</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-lg-2">
                                    
                    </div>
                    <div class="col-lg-8">

                        <div class="panel panel-primary">
                         <div class="panel-heading text-center">Recursos Recaudados Directamente</div>
                            <table class="responsive table table-striped table-bordered table-hover">
                                <tr class="info">
                                    <th>Código</th>
                                    <th>Clasificador de gastos</th>
                                    <th>Pac Destinado</th>
                                    <th> Ejecutado</th>
                                    <th>Saldos</th>
                                </tr>
                                <tr>
                                     <td>ESIS-0006</td>
                                     <td>Bienes y servicios</td>  
                                     <td>9586,50</td>  
                                     <td>9586,50</td>
                                     <td>0,00</td>       
                                </tr>
                                <tr>
                                     <td>ESIS-0011</td>
                                     <td>Bienes y servicios</td>  
                                     <td>1405,20</td>  
                                     <td>1405,20</td>
                                     <td>0,00</td>       
                                </tr>

                                <tr>
                                     <td>ESIS-0016</td>
                                     <td>Bienes y servicios</td>  
                                     <td>1000,00</td>  
                                     <td>1000,00</td>
                                     <td>0,00</td>       
                                </tr>
                                <th>

                                  <td>Total</td>
                                  <td> 11991,70</td>
                                  <td>11991,70</td>
                                  <td>0,00</td>

                                </th>

                            </table>
                                        <!-- /.panel-body -->
                        </div>

                    </div>
                    <div class="col-lg-2"> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                                    
                    </div>
                    <div class="col-lg-8">

                        <div class="panel panel-primary">
                         <div class="panel-heading text-center">Recursos Ordinarios</div>
                            <table class="responsive table table-striped table-bordered table-hover">
                                <tr class="info">
                                    <th>Código</th>
                                    <th>Clasificador de gastos</th>
                                    <th>Pac Destinado</th>
                                    <th> Ejecutado</th>
                                    <th>Saldos</th>
                                </tr>
                                <tr>
                                     <td>ESIS-0005</td>
                                     <td>Bienes y servicios</td>  
                                     <td>4027,00</td>  
                                     <td>4026,07</td>
                                     <td>0,93</td>       
                                </tr>
                                <tr>
                                     <td>ESIS-0006</td>
                                     <td>Bienes y servicios</td>  
                                     <td>1000,00</td>  
                                     <td>999,36</td>
                                     <td>0,64</td>       
                                </tr>
                                <tr>
                                     <td>ESIS-0017</td>
                                     <td>Bienes de capital</td>  
                                     <td>14000,00</td>  
                                     <td>13860,00</td>
                                     <td>140,00</td>       
                                </tr>
                                <tr>
                                     <td>ESIS-0019</td>
                                     <td>Bienes de capital</td>  
                                     <td>5000,00</td>  
                                     <td>4996,10</td>
                                     <td>3,90</td>       
                                </tr>
                                <tr>
                                     <td>ESIS-0011</td>
                                     <td>Bienes y servicios</td>  
                                     <td>900,00</td>  
                                     <td>900,00</td>
                                     <td>0,00</td>       
                                </tr>
                                <tr>
                                     <td>ESIS-0016</td>
                                     <td>Bienes y servicios</td>  
                                     <td>1000,00</td>  
                                     <td>997,50</td>
                                     <td>2,50</td>       
                                </tr>
                                <th>

                                  <td>Total</td>
                                  <td> 25927,00</td>
                                  <td>25782,00</td>
                                  <td>147,97</td>

                                </th>

                            </table>
                                        <!-- /.panel-body -->
                        </div>

                    </div>
                    <div class="col-lg-2"> 
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
