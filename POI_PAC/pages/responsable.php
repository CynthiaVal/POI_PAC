<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Responsable</title>
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
                        <li class="active"><a  href="#">PAC 2014 </a></li>
                        <li class="active"><a href="#">PAC 2015</a></li>
                        <li class="active"><a href="#">PAC 2016</a></li>

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
            <br>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php"><h5>Inicio</h5></a></li>
                            
                            <?php

                                $r=$_GET["r"];
                                switch ($r) {
                                    case '1':
                                        echo "
                                            <li><a href='lista_responsable.php?r=".$r."'> <h5>/ Responsable por Proyecto</a></li>
                                            ";
                                        break;
                                    case '2':
                                    echo "
                                            <li><a href='lista_responsable.php?r=".$r."'> <h5>/ Responsable por Actividad</a></li>
                                            ";
                                        break;
                                    case '3':
                                    echo "
                                            <li><a href='lista_responsable.php?r=".$r."'> <h5>/ Responsable por Tarea</a></li>
                                            ";
                                        break;
                                }

                            ?>
                            
                            <li class="active"><h5>/ Responsable</h5></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="panel panel-primary">
                        <div class="row text-center">
                            <div class="col-lg-10 col-lg-offset-1">
                                
                                <?php
                                                        //include("conexion.php");
                                                        $responsable=array();
                                                        $res=$_GET["res"];
                                                        $query = "select cargo from responsable where cod_responsable='$res'";
                                                        $result = $conexion->query($query);
                                                        while($row = mysqli_fetch_row($result))
                                                        {
                                                            $responsable[] = $row;
                                                        }

                                                        mysqli_free_result($result);
                                                        //$conexion->next_result();
                                                                                      

                                                        for ($i=0;$i<count($responsable);$i++)
                                                        {
                                                            echo

                                                                "<h3>".utf8_encode($responsable[$i][0])."</h3>";
                                                                                                                           

                                                        }
                                                        
                                    ?>

                                <!--<h3>Vicerectorado Académico</h3>-->
                                <hr class="small">       
                            </div>
                        </div>
                        <div class="  container">
                            <div class="row">
                                <div class="col-lg-2">
                                    
                                </div>
                                <div class="col-lg-8">
                                    <div class="panel panel-primary">

                                        <!--<div class="panel-heading text-center">Proyectos</div>
                                        //panel-heading
                                        <div class="panel-body">
                                            <ol>-->
                                                <?php
                                                        //include("conexion.php");
                                                        $accion=$_GET["accion"];

                                                        switch ($accion) {
                                                            case "proyecto":
                                                                {
                                                                echo"
                                                                <div class='panel-heading text-center'>Proyectos</div>
                                                                <div class='panel-body'>
                                                                    <ol>";

                                                                $proyecto=array();
                                                                $res=$_GET["res"];
                                                                $query = "call ver_proyecto_por_responsable('$res')";
                                                                $result = $conexion->query($query);
                                                                while($row = mysqli_fetch_row($result))
                                                                {
                                                                    $proyecto[] = $row;
                                                                }

                                                                mysqli_free_result($result);
                                                                $conexion->next_result();
                                                                                              

                                                                for ($i=0;$i<count($proyecto);$i++)
                                                                {                                                            
                                                                     if($i==0 and $proyecto[$i][0]=="?PRO01"){
                                                                        echo
                                                                    "<li>
                                                                    <a href='proyecto.php?accion=proyecto&posicion=".$i."&pro=PRO01&res=$res'>".utf8_encode($proyecto[$i][1])."</a>
                                                                    </li>";

                                                                     }else{
                                                                        echo
                                                                    "<li>
                                                                    <a href='proyecto.php?accion=proyecto&posicion=".$i."&pro=".$proyecto[$i][0]."&res=$res'>".utf8_encode($proyecto[$i][1])."</a>
                                                                    </li>";

                                                                     }                                                        
                                                                 }                               
                                                                }
                                                                break;
                                                                case "actividad":
                                                                {

                                                                echo"
                                                                <div class='panel-heading text-center'>Actividades</div>
                                                                <div class='panel-body'>
                                                                    <ol>";

                                                                $actividad=array();
                                                                $res=$_GET["res"];
                                                                $query = "call ver_actividad_por_responsable('$res')";
                                                                $result = $conexion->query($query);
                                                                while($row = mysqli_fetch_row($result))
                                                                {
                                                                    $actividad[] = $row;
                                                                }

                                                                mysqli_free_result($result);
                                                                $conexion->next_result();
                                                                                              

                                                                for ($i=0;$i<count($actividad);$i++)
                                                                {                                                            
                                                                    
                                                                    if($i==0 and $actividad[$i][0]=="?ACT01"){
                                                                        echo
                                                                        "<li>
                                                                        <a href='actividad.php?accion=actividad&posicion=".$i."&act=ACT01&res=$res'>".utf8_encode($actividad[$i][1])."</a>
                                                                        </li>";

                                                                     }else{
                                                                        echo
                                                                        "<li>
                                                                        <a href='actividad.php?accion=actividad&posicion=".$i."&act=".$actividad[$i][0]."&res=$res'>".utf8_encode($actividad[$i][1])."</a>
                                                                        </li>";

                                                                     }

                                                                    
                                                                        
                                                                }
                                                                                                
                                                                 break;
                                                                }
                                                                   
                                                            case "tarea":
                                                                {

                                                                echo"
                                                                <div class='panel-heading text-center'>Tareas</div>
                                                                <div class='panel-body'>
                                                                    <ol>";

                                                                $tarea=array();
                                                                $res=$_GET["res"];
                                                                $query = "call ver_tarea_por_responsable('$res')";
                                                                $result = $conexion->query($query);
                                                                while($row = mysqli_fetch_row($result))
                                                                {
                                                                    $tarea[] = $row;
                                                                }

                                                                mysqli_free_result($result);
                                                                $conexion->next_result();
                                                                                              

                                                                for ($i=0;$i<count($tarea);$i++)
                                                                {                                                            
                                                                        
                                                                    echo
                                                                    "<li>
                                                                    <a href='tarea.php?accion=responsable&res=$res&tar=".$tarea[$i][0]."&'>".utf8_encode($tarea[$i][1])."</a>
                                                                    </li>";
                                                                        
                                                                }
                                                                                                
                                                                 break;
                                                                }
                                                                    
                                                            }
                                                            
                                                             
                                                        ?>
                                                
                                            </ol>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <div class="col-lg-2"> 
                                </div>
                            </div>
                            <br>
                           
                           <?php

                            
                            $accion=$_GET["accion"];
                            $posicion=$_GET["posicion"]+1;
                            $posicion2=$_GET["posicion"]-1;

                            switch($accion)
                            {
                                case "todo":{
                                    $res="todo";
                                    $proyectos=array('0'=> 'PRO01',
                                    '1'=> 'PRO02',
                                    '2'=> 'PRO03',
                                    '3'=> 'PRO04',
                                    '4'=> 'PRO05'
                                    );

                                }
                                break;
                                case "proyecto":{
                                    //$pro=$_GET["pro"];
                                    $res=$_GET["res"];
                                        $responsables=array('0'=> 'RES01',
                                        '1'=> 'RES09',
                                        '2'=> 'RES12'
                                        );
                                        break;
                                    }
                                        
                                    


                                
                                break;
                                case "actividad":{
                                    //$pro=$_GET["pro"];
                                    $res=$_GET["res"];
                                        $responsables=array('0'=> 'RES02',
                                        '1'=> 'RES03',
                                        '2'=> 'RES04',
                                        '3'=> 'RES05',
                                        '4'=> 'RES06',
                                        '5'=> 'RES07',
                                        '6'=> 'RES08',
                                        '7'=> 'RES10',
                                        '8'=> 'RES11'
                                        );
                                        break;

                                }
                                break;
                                case "tarea":{
                                    //$pro=$_GET["pro"];
                                    $res=$_GET["res"];
                                        $responsables=array('0'=> 'RES03',
                                        '1'=> 'RES11'                                       
                                        );
                                        break;

                                }
                                break;

                            }

                             ?>


                            <!-- /.row -->
                            <div class="row">
                                <p style="line-height: 70px; text-align: center;">
                                <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-left"></span><a onclick="window.location = 'responsable.php'" target="_new" href=" <?php echo "responsable.php?accion=$accion&res=".$responsables[$posicion2]."&posicion=$posicion&r=".$r."" ; ?> "> ANTERIOR</button>
                                <button type="submit" class="btn btn-primary"> <a onclick="window.location = 'responsable.php'" target="_new" href=" <?php echo "responsable.php?accion=$accion&res=".$responsables[$posicion]."&posicion=$posicion&r=".$r."" ; ?> ">SIGUIENTE</a>  <span class="glyphicon glyphicon-arrow-right"></span></button></p>
                                       
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