<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Tarea</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <a class="navbar-brand text-center" href="index.php">Plan Operativo Institucional</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-open-o fa-fw"></i> Proyectos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php

                                include("conexion.php");
                                error_reporting(E_ALL ^ E_NOTICE);
                                $proyecto=array();
                                $query = "call ver_proyecto()";
                                $result = $conexion->query($query);
                                while($row = mysqli_fetch_row($result))
                                {
                                    $proyecto[] = $row;
                                }

                                mysqli_free_result($result);
                                $conexion->next_result();
                                                              

                                for ($i=0;$i<count($proyecto);$i++)
                                {
                                    if($i==0){
                                        echo

                                        "
                                        <li>
                                            <a href='proyecto.php?accion=todo&posicion=".$i."&pro=PRO01'><h6>".utf8_encode($proyecto[$i][1])."</h6></a>
                                        </li>";

                                    }else{
                                    echo

                                        "
                                        <li>
                                            <a href='proyecto.php?accion=todo&posicion=".$i."&pro=".$proyecto[$i][0]."'><h6>".utf8_encode($proyecto[$i][1])."</h6></a>
                                        </li>";

                                }
                                }

                                //$conexion->close();                            
                                ?>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        <a href="lista_responsable.php"><i class="fa fa-users fa-fw"></i> Responsables</a>    
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="programacion.php"><i class="fa fa-calendar fa-fw"></i> Programación Trimestral </a>
                            
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
                            <li><a href="index.php"><h5>Inicio</h5></a></li>
                            <?php
                                    
                                    $proyecto=array();
                                    $pro=$_GET["res"];
                                    $query = "select nombre  from proyecto where cod_proyecto='$pro'";
                                    $result = $conexion->query($query);
                                    while($row = mysqli_fetch_row($result))
                                    {
                                         $proyecto[] = $row;
                                    }

                                    mysqli_free_result($result);
                                   // $conexion->next_result();
                                                                                      

                                    for ($i=0;$i<count($proyecto);$i++)
                                    {
                                        
                                        echo "
                                        <li><a href='proyecto.php?accion=todo&posicion=".$i."&pro=".$pro."'> <h5>/ ".utf8_encode($proyecto[$i][0])."</h5></a></li>
                                        ";   
                                        
                                    }                                                                 
                                ?>
                                <?php
                                    
                                    $actividad=array();
                                    $act=$_GET["act"];
                                    $pro=$_GET["res"];
                                    $query = "select nombre  from actividad where cod_actividad='$act'";
                                    $result = $conexion->query($query);
                                    while($row = mysqli_fetch_row($result))
                                    {
                                         $actividad[] = $row;
                                    }

                                    mysqli_free_result($result);
                                   // $conexion->next_result();
                                                                                      

                                    for ($i=0;$i<count($actividad);$i++)
                                    {
                                        
                                        echo "
                                        <li><a href='actividad.php?accion=proyecto&posicion=".$i."&act=".$act."&res=$pro'> <h5>/ ".utf8_encode($actividad[$i][0])."</h5></a></li>
                                        ";   
                                                                            }                                                                 
                                ?>

                            <li class="active"><h5>/ Tarea</h5></li>
                        </ol>
                        
                       </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="panel panel-primary">
                        <div class="row text-center">
                            <div class="col-lg-10 col-lg-offset-1">

                                <?php
                                                        //include("conexion.php");
                                                        $tarea=array();
                                                        $tar=$_GET["tar"];
                                                        $query = "select nombre from tarea where cod_tarea='$tar'";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $tarea[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                       // $conexion->next_result();
                                                                                      

                                                        for ($i=0;$i<count($tarea);$i++)
                                                        {
                                                            echo

                                                                "<h3>".utf8_encode($tarea[$i][0])."</h3>";
                                                                                                                           

                                                        }
                                                        
                                    ?>


                                <hr class="small">       
                            </div>
                        </div>
                        <div class="  container">
                            <div class="row">
                                <div class="col-lg-2">
                                    
                                </div>
                                <div class="col-lg-8">
                                    <div class="panel panel-primary">

                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#programacion" data-toggle="tab">Programación</a>
                                                <li clas><a href="#responsable" data-toggle="tab">Responsable</a>
                                                </li>
                                                <li><a href="#metafisica" data-toggle="tab">Metafisica</a>
                                                </li>
                                                
                                                <li><a href="#recursos" data-toggle="tab">Recursos</a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="programacion">
                                                    <h4>Programación</h4>
                                                    <table class="responsive table table-striped table-bordered table-hover">
                                                        <tr class="info">
                                                            <th>I trimestre</th>
                                                            <th>II trimestre</th>
                                                            <th>III trimestre</th>
                                                            <th>IV trimestre</th>
                                                        </tr>
                                                        <tr>
                                                                    <td>1</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>

                                                                </tr>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="responsable">
                                                    <h4>Responsable</h4>
                                                    <p>Director E.A.P.</p>
                                                </div>
                                                <div class="tab-pane fade" id="metafisica">
                                                    <h4>Metafisica</h4>
                                                    <table class="responsive table table-striped table-bordered table-hover">
                                                        <tr class="info">
                                                            <th>Unidad de medida</th>
                                                            <th>Cantidad</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Documento</td>
                                                            <td>2</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade " id="recursos">
                                                    <h4>Recursos</h4>
                                                    <ol>
                                                        <?php
                                           //include("conexion.php");
                                                          $recurso=array();
                                                          $tar=$_GET["tar"];
                                                          $act=$_GET["act"];
                                                          $query = "call ver_recurso_por_tarea('$tar')";
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
                                                    <li><a href='recurso.php?act=".$act."&tar=".$tar."&rec=".$recurso[$i][0]."'>".utf8_encode($recurso[$i][1])."</a></li>
                                                   
                                                    ";
                                                }
                                                         
                                            ?>   
                                             

                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                            </div>
                            <br>
                           
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class=" col-sm-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading text-center">Evaluación</div>
                                            <table class="responsive table table-striped table-bordered table-hover">
                                                <tr class="info">
                                                    <th>I trimestre</th>
                                                    <th>II trimestre</th>
                                                    <th>III trimestre</th>
                                                    <th>IV trimestre</th>
                                                </tr>
                                                <tr>
                                                            <td> <label ><input type="checkbox" value="" ></label></td>
                                                            <td><label ><input type="checkbox" value="" ></label></td>
                                                            <td><label ><input type="checkbox" value="" ></label></td>
                                                            <td> <label ><input type="checkbox" value="" ></label></td>

                                                        </tr>
                                            </table>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>

                              <?php

                            
                                $accion=$_GET["accion"];
                                $posicion=$_GET["posicion"]+1;
                                $posicion2=$_GET["posicion"]-1;
                                $act=$_GET["act"];
                                $res=$_GET["res"];

                                switch($accion)
                                {
                                case "tri1":{
                                    $tareas=array('0'=> 'TAR01',
                                        '1'=>'TAR14',
                                        '2'=>'TAR17',
                                        '3'=>'TAR25',
                                        '4'=>'TAR26'
                                    
                                    );

                                }
                                break;
                                case "tri2":{
                                    $tareas=array(
                                    '0'=>'TAR02',
                                    '1'=>'TAR04',
                                    '2'=>'TAR05',
                                    '3'=>'TAR06',
                                    '4'=>'TAR08',
                                    '5'=>'TAR12',
                                    '6'=>'TAR13',
                                    '7'=>'TAR14',
                                    '8'=>'TAR16',
                                    '9'=>'TAR17',
                                    '10'=>'TAR19',
                                    '11'=>'TAR20',
                                    '12'=>'TAR21',
                                    '13'=>'TAR22',
                                    '14'=>'TAR24',
                                    '15'=>'TAR25',
                                    '16'=>'TAR26' );
                                    
                                }
                                break;
                                case "tri3":{
                                    //$act=$_GET["act"];
                                   // $res=$_GET["res"];
                                    $tareas=array(
                                    '0'=>'TAR01',
                                    '1'=>'TAR03',
                                    '2'=>'TAR04',
                                    '3'=>'TAR05',
                                    '4'=>'TAR07',
                                    '5'=>'TAR11',
                                    '6'=>'TAR12',
                                    '7'=>'TAR14',
                                    '8'=>'TAR15',
                                    '9'=>'TAR16',
                                    '10'=>'TAR17',
                                    '11'=>'TAR18',
                                    '12'=>'TAR21',
                                    '13'=>'TAR22',
                                    '14'=>'TAR23',
                                    '15'=>'TAR25',
                                    '16'=>'TAR26');
                                }
                                break;             
                                case "tri4":{
                                    $tareas=array(
                                    '0'=>'TAR02',
                                    '1'=>'TAR04',
                                    '2'=>'TAR05',
                                    '3'=>'TAR09',
                                    '4'=>'TAR10',
                                    '5'=>'TAR12',
                                    '6'=>'TAR14',
                                    '7'=>'TAR15',
                                    '8'=>'TAR17',
                                    '9'=>'TAR18',
                                    '10'=>'TAR20',
                                    '11'=>'TAR24',
                                    '12'=>'TAR25',
                                    '13'=>'TAR26');

                                }
                                break;
                                case "responsable":{
                                    //$res=$_GET["res"];
                                    switch($res){
                                        case "RES03":
                                        $tareas=array(
                                        '0'=>'TAR01',
                                        '1'=>'TAR02',
                                        '2'=>'TAR03',
                                        '3'=>'TAR04',
                                        '4'=>'TAR05',
                                        '5'=>'TAR06',
                                        '6'=>'TAR07',
                                        '7'=>'TAR08',
                                        '8'=>'TAR09',
                                        '9'=>'TAR10',
                                        '10'=>'TAR11',
                                        '11'=>'TAR12',
                                        '12'=>'TAR13',
                                        '13'=>'TAR14',
                                        '14'=>'TAR15',
                                        '15'=>'TAR16',
                                        '16'=>'TAR17',
                                        '17'=>'TAR18',
                                        '18'=>'TAR19',
                                        '19'=>'TAR20',
                                        '20'=>'TAR21',
                                        '21'=>'TAR22',
                                        '22'=>'TAR23',
                                        '23'=>'TAR24',
                                        '24'=>'TAR25',
                                        '25'=>'TAR26'
                                    );
                                    break;
                                    case "RES13":
                                    $tareas=array(
                                        '0'=>'TAR13'
                                        );
                                    break;
                                    }
                                    

                                }
                                break;
                                case "actividad":
                                //$act=$_GET["act"];
                                switch($act){
                                    case "ACT01":
                                    $tareas=array(
                                        '0'=> 'TAR01',
                                        '1'=> 'TAR02',
                                        '2'=> 'TAR03'
                                        );
                                    break;
                                    case "ACT02":
                                    $tareas=array(
                                        '0'=> 'TAR04',
                                        '1'=> 'TAR05',
                                        '2'=> 'TAR06'
                                        );
                                    break;
                                    case "ACT03":
                                    $tareas=array(
                                        '0'=> 'TAR07',
                                        '1'=> 'TAR08',
                                        '2'=> 'TAR09',
                                        '3'=> 'TAR10',
                                        );
                                    break;
                                    case "ACT04":
                                    $tareas=array(
                                        '0'=> 'TAR11',
                                        '1'=> 'TAR12'
                                        );
                                    break;
                                    case "ACT05":
                                    $tareas=array(
                                        '0'=> 'TAR13',
                                        );
                                    break;
                                    case "ACT06":
                                    $tareas=array(
                                        '0'=> 'TAR14',
                                        '1'=> 'TAR15',
                                        '2'=> 'TAR16',
                                        '3'=> 'TAR17',
                                        '4'=> 'TAR18',
                                        '5'=> 'TAR19',
                                        '6'=> 'TAR20',
                                        '7'=> 'TAR21',
                                        '8'=> 'TAR22',
                                        '9'=> 'TAR23',
                                        '10'=> 'TAR24',
                                        '11'=> 'TAR25',
                                        '12'=> 'TAR26'
                                        );
                                    break;
                                    
                                }

                                }

                            ?>
                            

                            <!-- /.row -->
                            <div class="row">
                                <p style="line-height: 70px; text-align: center;">
                                <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-left"></span><a onclick="window.location = 'tarea.php'" target="_new" href=" <?php echo "tarea.php?accion=$accion&posicion=$posicion2&tar=".$tareas[$posicion2]."&res=$res&act=$act"; ?> " > Anterior</a></button>
                                <button type="submit" class="btn btn-primary"><a onclick="window.location = 'tarea.php'" target="_new" href=" <?php echo "tarea.php?accion=$accion&posicion=$posicion&tar=".$tareas[$posicion]."&res=$res&act=$act"; ?> " >Siguiente </a><span class="glyphicon glyphicon-arrow-right"></span></button></p>
                                        
                            </div>

                            <br> <br>                          
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            <!-- /.container-fluid -->
            <!--<footer class='text-center'>
                <div class='footer-below'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                Copyright &copy; Sistema POI - PAC 2015
                            </div>
                        </div>
                    </div>
                </div>
            </footer>-->
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