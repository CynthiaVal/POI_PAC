<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Compra de Bienes</title>

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
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
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

                                //$conexion->close(); 
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
                        <h3 class="">
                        <ol class="breadcrumb">
                            <li><a href="pac.php">Inicio</a></li>
                            <li class="active">/ Tipo de recurso</li>
                        </ol>
                       </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <br>

                <div class="row">
                    <div class="panel panel-primary">
                         <div class="row text-center">
                            <div class="col-lg-10 col-lg-offset-1">
                                <h3>Compra de bienes</h3>
                                <hr class="small">       
                            </div>
                        </div>
                        <div class="  container">
                            <div class="row " >
                                <div class="col-sm-1"></div>

                                <div class="col-lg-10 ">
                                      <table class="responsive table table-striped table-bordered table-hover">
                                            <tr class="info ">
                                                <th>Recurso</th>
                                                <th>Cantidad</th>
                                                <th>Precio Un.</th>
                                                <th>Total</th>
                                                <th> Evaluación</th>
                                                
                                            </tr>
                                            <?php
                                            //include("conexion.php");
                                            $recurso=array();
                                            $f1=35;
                                            $query="call ver_recurso_por_clasificador('2.3.1')";

                                            $result = $conexion->query($query);
                                                while($row = mysqli_fetch_row($result))
                                                {
                                                    $recurso[] = $row;
                                                }

                                                mysqli_free_result($result);
                                                $conexion->next_result();
                                                                              

                                                for ($i=0;$i<count($recurso);$i++)
                                                {
                                                    echo "
                                                    <tr>
                                                        <td><a href='recurso1.php?f1=".$f1."&rec=".$recurso[$i][0]."&posicion=".$i."'><h6>".utf8_encode($recurso[$i][3])." </h6></a> </td>
                                                        <td>".$recurso[$i][6]."</td>
                                                        <td>".$recurso[$i][7]."</td>
                                                        <td>".$recurso[$i][8]."</td>
                                                        <td> <label ><input type='checkbox' value='' ></label></td>
                                                        
                                                    </tr>
                                                    ";
                                                }

                                            ?>   
                                              
                                      </table>
                                
                                </div>

                                <div class="col-sm-1"></div>
                            </div>
                            <br><br>
                         
                        </div>
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
