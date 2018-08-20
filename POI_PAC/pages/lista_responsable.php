<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Lista Responsables</title>
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
                        <h3 class="page-header">
                        <ol class="breadcrumb">
                            <li><a href="index.php"><h4>Inicio</h5></a></li>
                            
                            <li class="active"><h4>/ Listado Responsables</h5></li>
                        </ol>
                        
                       </h3>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                                <div class="col-lg-2">
                                    
                                </div>
                                <div class="col-lg-8">
                                    <div class="panel panel-primary">

                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#por_proyecto" data-toggle="tab">Por Proyecto</a>
                                                <li clas><a href="#por_actividad" data-toggle="tab">Por Actividad</a>
                                                </li>
                                                <li><a href="#por_tarea" data-toggle="tab">Por Tarea</a>
                                                </li>
                                            
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="por_proyecto">
                                                    <h3>Responsables por Proyecto:</h3>
                                                    <ol>
                                                        
                                                        <?php
                                                        //include("conexion.php");
                                                        $responsable=array();
                                                        $r=1;
                                                        $query = "call ver_responsable_por_proyecto2()";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $responsable[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                        $conexion->next_result();

                                                        for ($i=0;$i<count($responsable);$i++)
                                                        {                                                            
                                                                if($i==0){
                                                                    echo
                                                                "
                                                                <li>
                                                                    <a href='responsable.php?accion=proyecto&res=RES01&posicion=".$i."&r=".$r."'>".utf8_encode($responsable[$i][1])."</a>
                                                                </li>";                                                            


                                                                }else{
                                                                echo
                                                                "
                                                                <li>
                                                                    <a href='responsable.php?accion=proyecto&res=".$responsable[$i][0]."&posicion=".$i."&r=".$r."'>".utf8_encode($responsable[$i][1])."</a>
                                                                </li>";
                                                                }                                                            

                                                        }
                                                        //$conexion->close();
                                                                                        
                                                        ?>

                                                    </ol>
                                                </div>
                                                <div class="tab-pane fade" id="por_actividad">
                                                    <h3>Responsables por actividad:</h3>
                                                    <ol>
                                                        
                                                        <?php
                                                        //include("conexion.php");
                                                        $responsable2=array();
                                                        $r=2;
                                                        $query = "call ver_responsable_por_actividad2()";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $responsable2[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                        $conexion->next_result();
                                                                                      

                                                        for ($i=0;$i<count($responsable2);$i++)
                                                        {
                                                            echo

                                                                "
                                                                <li>
                                                                    <a href='responsable.php?accion=actividad&posicion=".$i."&res=".$responsable2[$i][0]."&r=".$r."'>".utf8_encode($responsable2[$i][1])."</a>
                                                                </li>";
                                                           

                                                        }
                                                        //$conexion->close();
                                                        ?>
                                                        

                                                    </ol>
                                                </div>
                                                <div class="tab-pane fade" id="por_tarea">
                                                    <h3>Responsables por Tarea:</h3>
                                                    <ol>
                                                        <?php
                                                        //include("conexion.php");
                                                        $responsable3=array();
                                                        $r=3;
                                                        $query = "call ver_responsable_por_tarea2()";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $responsable3[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                        $conexion->next_result();
                                                                                      

                                                        for ($i=0;$i<count($responsable3);$i++)
                                                        {
                                                            echo

                                                                "
                                                                <li>
                                                                    <a href='responsable.php?accion=tarea&posicion=".$i."&res=".$responsable3[$i][0]."&r=".$r."'>".utf8_encode($responsable3[$i][1])."</a>
                                                                </li>";
                                                            

                                                        }
                                                        $conexion->close();
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