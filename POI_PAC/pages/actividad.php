<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Actividad POI</title>

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
                            <li class="active"><h5>/ Actividades</h5></li>
                        </ol>
                        
                       </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="panel panel-primary">
                        
                        <div class="row text-center">
                        <br>
                            <div class="col-lg-10 col-lg-offset-1">
                                <?php
                                                        //include("conexion.php");
                                                        $actividad=array();
                                                        $act=$_GET["act"];
                                                        $query = "select nombre from actividad where cod_actividad='$act'";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $actividad[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                         

                                                        for ($i=0;$i<count($actividad);$i++)
                                                        {
                                                            echo

                                                                "<h4>".utf8_encode($actividad[$i][0])."</h4>";
                                                                                                                           

                                                        }
                                                        
                                    ?>
                               
                                <hr class="small">       
                            </div>
                        </div>
                        <div class="  container">
                            <div class="row "> 
                                <div class="col-md-2">
                                    
                                </div>

                                <div class="col-md-8  ">
                                    <h3> Responsable(s): </h3>
                                    <ul>
                                        <?php
                                        $responsable=array();
                                                        $act=$_GET["act"];
                                                        $query = "call ver_responsable_por_actividad('$act')";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $responsable[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                        $conexion->next_result();
                                                                                      

                                                        for ($i=0;$i<count($responsable);$i++)
                                                        {
                                                            echo

                                                                "<li><h4>".utf8_encode($responsable[$i][3])."</h4></li>";
                                                                                                                           

                                                        }
                                                        ?>
                                                                                
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    
                                </div>
                            </div>
                            <br><br>
                            <div class="row " >
                                <div class="col-sm-1"></div>

                                <div class="col-lg-10 ">
                                            <table class="responsive table table-striped table-bordered table-hover">
                                            <tr class="info ">
                                                <th>Tarea</th>
                                                <th>Responsable</t>
                                                <th>I Trimestre</th>
                                                <th>II Trimestre</th>
                                                <th>III Trimestre</th>
                                                <th>IV Trimestre</th>
                                            </tr>
                                            <?php
                                                        //include("conexion.php");
                                                        $act=$_GET["act"];
                                                        $pro=$_GET["res"];
                                                        $responsables=array();
                                                        $query = "call ver_tarea_por_actividad('$act')";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $responsables[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                        $conexion->next_result();

                                                        for ($i=0;$i<count($responsables);$i++)
                                                        {                                                            
                                                                if($i==0){
                                                                    echo
                                                                "
                                                                <tr>
                                                                    <td><a href='tarea.php?accion=actividad&act=$act&posicion=".$i."&tar=".$responsables[$i][0]."&res=".$pro."'>".utf8_encode($responsables[$i][1])."</a></td>
                                                                    <td>Director de la E.A.P. </td>
                                                                    <td> <label ><input type='checkbox' value='' ></label></td>
                                                                    <td> <label ><input type='checkbox' value='' ></label></td>
                                                                    <td><label ><input type='checkbox' value='' ></label></td>
                                                                    <td><label ><input type='checkbox' value='' ></label></td>
                                                                </tr>";                                                            


                                                                }else{
                                                                echo
                                                                "
                                                                <tr>
                                                                <td><a href='tarea.php?accion=actividad&act=$act&posicion=".$i."&tar=".$responsables[$i][0]."&res=".$pro."'>".utf8_encode($responsables[$i][1])."</a></td>
                                                                <td>Director de la E.A.P. </td>
                                                                <td> <label ><input type='checkbox' value='' ></label></td>
                                                                <td> <label ><input type='checkbox' value='' ></label></td>
                                                                <td><label ><input type='checkbox' value='' ></label></td>
                                                                <td><label ><input type='checkbox' value='' ></label></td>

                                                                </tr>";
                                                                }                                                            

                                                        }
                                                        //$conexion->close();
                                                                                        
                                                        ?>
                                            
                                            <!--<tr>
                                                <td><a href="">Desarrollo de talleres para revisión de los perfiles del ingresante </a> </td>
                                                <td>Director de la E.A.P. </td>
                                                <td> <label ><input type="checkbox" value="" ></label></td>
                                                <td><label ><input type="checkbox" value="" ></label></td>
                                                <td><label ><input type="checkbox" value="" ></label></td>
                                                <td> <label ><input type="checkbox" value="" ></label></td>
                                            </tr>-->
                                            </table>
                                
                                </div>

                                <div class="col-sm-1"></div>
                            </div>
                            <br><br>

                            <!-- /.row -->
                            <?php

                            
                            $accion=$_GET["accion"];
                            $posicion=$_GET["posicion"]+1;
                            $posicion2=$_GET["posicion"]-1;

                            switch($accion)
                            {
                                case "todo":{
                                    $res="todo";
                                    $actividades=array('0'=> 'ACT01',
                                    '1'=> 'ACT02',
                                    '2'=> 'ACT03',
                                    '3'=> 'ACT04',
                                    '4'=> 'ACT05',
                                    '5'=> 'ACT06'
                                    );

                                }
                                break;
                                case "actividad":{
                                    $act=$_GET["act"];
                                    $res=$_GET["res"];
                                    switch($res){
                                        case "RES02":
                                        $actividades=array('0'=> 'ACT01',
                                        '1'=> 'ACT02',
                                        '2'=> 'ACT03',
                                        '3'=> 'ACT05'
                                        );
                                        break;
                                        case "RES03":
                                        $actividades=array('0'=> 'ACT01',
                                        '1'=> 'ACT02',
                                        '2'=> 'ACT03',
                                        '3'=> 'ACT04',
                                        '4'=> 'ACT06'
                                        );
                                        break;
                                        case "RES04":
                                        $actividades=array('0'=> 'ACT01'
                                        );
                                        case "RES05":
                                        $actividades=array('0'=> 'ACT01'
                                        );
                                        case "RES06":
                                        $actividades=array('0'=> 'ACT02'
                                        );
                                        case "RES07":
                                        $actividades=array('0'=> 'ACT02'
                                        );
                                        case "RES08":
                                        $actividades=array('0'=> 'ACT02'
                                        );
                                        case "RES10":
                                        $actividades=array('0'=> 'ACT04'
                                        );
                                        case "RES11":
                                        $actividades=array('0'=> 'ACT05'
                                        );
                                        break;
                                        
                                    }
                               
                                }
                                break;
                                case "proyecto":{
                                    $act=$_GET["act"];
                                    $res=$_GET["res"];
                                    switch($res){
                                        case "PRO01":
                                        $actividades=array('0'=> 'ACT01',
                                        '1'=> 'ACT02'                                        
                                        );
                                        break;
                                        case "PRO02":
                                        $actividades=array('0'=> 'ACT07',
                                        '1'=> 'ACT08' );
                                        break;
                                        case "PRO03":
                                        $actividades=array('0'=> 'ACT03'
                                        );
                                        break;
                                        case "PRO04":
                                        $actividades=array('0'=> 'ACT04',
                                        '1'=> 'ACT05'
                                        );
                                        break;
                                        case "PRO05":
                                        $actividades=array('0'=> 'ACT06'
                                        );
                                        break;
                                        case "PRO06":
                                        $actividades=array('0'=> 'ACT02'
                                        );
                                        break;
                                        
                                    }
                               
                                }
                                case "tarea":{

                                }
                                break;

                            }

                             ?>
                            <div class="row">
                                <p style="line-height: 70px; text-align: center;">
                                <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-left"></span><a onclick="window.location = 'actividad.php'" target="_new" href=" <?php echo "actividad.php?accion=$accion&posicion=$posicion2&act=".$actividades[$posicion2]."&res=$res"; ?> " > Anterior</a></button>
                                <button type="submit" class="btn btn-primary"><a onclick="window.location = 'actividad.php'" target="_new" href=" <?php echo "actividad.php?accion=$accion&posicion=$posicion&act=".$actividades[$posicion]."&res=$res"; ?> " >Siguiente </a><span class="glyphicon glyphicon-arrow-right"></span></button></p>
                                        
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