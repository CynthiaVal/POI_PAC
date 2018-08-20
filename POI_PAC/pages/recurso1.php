<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Recurso</title>

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
                                error_reporting(E_ALL ^ E_NOTICE);
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
                        <ol class="breadcrumb">
                            <li><a href="pac.php"><h5>INICIO</h5></a></li>
                            <?php
                                    
                                    
                                    $f1=$_GET["f1"];
                                    $posicion=$_GET["posicion"]+1;
                                    $posicion2=$_GET["posicion"]-1;
                                    switch ($f1) {
                                        case '34':
                                        $recursos=array(
                                            '0'=> 'REC001',
                                            '1'=> 'REC002',
                                            '2'=> 'REC003',
                                            '3'=> 'REC004',
                                            '4'=> 'REC005',
                                            '5'=> 'REC006',
                                            '6'=> 'REC007',
                                            '7'=> 'REC008',
                                            '8'=> 'REC009',
                                            '9'=> 'REC010',
                                            '10'=> 'REC011',
                                            '11'=> 'REC012',
                                            '12'=> 'REC013',
                                            '13'=> 'REC014',
                                            '14'=> 'REC015',
                                            '15'=> 'REC016',
                                            '16'=> 'REC017',
                                            '17'=> 'REC018',
                                            '18'=> 'REC019',
                                            '19'=> 'REC020',
                                            '20'=> 'REC021',
                                            '21'=> 'REC022',
                                            '22'=> 'REC023',
                                            '23'=> 'REC025',
                                            '24'=> 'REC026',
                                            '25'=> 'REC027',
                                            '26'=> 'REC028',
                                            '27'=> 'REC029',
                                            '28'=> 'REC030',
                                            '29'=> 'REC031',
                                            '30'=> 'REC032',
                                            '31'=> 'REC033',
                                            '32'=> 'REC034',
                                            '33'=> 'REC035',
                                            '34'=> 'REC036',
                                            '35'=> 'REC037',
                                            '36'=> 'REC038',
                                            '37'=> 'REC039',
                                            '38'=> 'REC040',
                                            '39'=> 'REC041',
                                            '40'=> 'REC042',
                                            '41'=> 'REC043',
                                            '42'=> 'REC044',
                                            '43'=> 'REC045',
                                            '44'=> 'REC046',
                                            '45'=> 'REC047',
                                            '46'=> 'REC048',
                                            '47'=> 'REC049',
                                            '48'=> 'REC050',
                                            '49'=> 'REC051',
                                            '50'=> 'REC052',
                                            '51'=> 'REC053',
                                            '52'=> 'REC054',
                                            '53'=> 'REC055',
                                            '54'=> 'REC056',
                                            '55'=> 'REC057',
                                            '56'=> 'REC058',
                                            '57'=> 'REC059',
                                            '58'=> 'REC060',
                                            '59'=> 'REC061',
                                            '60'=> 'REC062',
                                            '61'=> 'REC063',
                                            '62'=> 'REC064',
                                            '63'=> 'REC065',
                                            '64'=> 'REC066',
                                            '65'=> 'REC067',
                                            '66'=> 'REC068',
                                            '67'=> 'REC069',
                                            '68'=> 'REC070',
                                            '69'=> 'REC071',
                                            '70'=> 'REC072',
                                            '71'=> 'REC073',
                                            '72'=> 'REC074',
                                            '73'=> 'REC075',
                                            '74'=> 'REC076',
                                            '75'=> 'REC077',
                                            '76'=> 'REC078',
                                            '77'=> 'REC079',
                                            '78'=> 'REC080',
                                            '79'=> 'REC081',
                                            '80'=> 'REC082',
                                            '81'=> 'REC083',
                                            '82'=> 'REC084',
                                            '83'=> 'REC085',
                                            '84'=> 'REC086',
                                            '85'=> 'REC087',
                                            '86'=> 'REC088',
                                            '87'=> 'REC089',
                                            '88'=> 'REC090',
                                            '89'=> 'REC091',
                                            '90'=> 'REC092',
                                            '91'=> 'REC093',
                                            '92'=> 'REC094',
                                            '93'=> 'REC095',
                                            '94'=> 'REC096',
                                            '95'=> 'REC097'    
                                            );   
                                           echo "
                                            <li><a href='fuente.php?f1=".$f1."'> <h5>/ Recursos Ordinarios</a></li>
                                            "; 
                                            break;
                                        case '33':
                                        $recursos=array(
                                            '0'=> 'REC098',
                                            '1'=> 'REC099',
                                            '2'=> 'REC100',
                                            '3'=> 'REC101',
                                            '4'=> 'REC102',
                                            '5'=> 'REC103',
                                            '6'=> 'REC104',
                                            '7'=> 'REC105',
                                            '8'=> 'REC106',
                                            '9'=> 'REC107',
                                            '10'=> 'REC108',
                                            '11'=> 'REC109',
                                            '12'=> 'REC110',
                                            '13'=> 'REC111',
                                            '14'=> 'REC112',
                                            '15'=> 'REC113',
                                            '16'=> 'REC114',
                                            '17'=> 'REC115',
                                            '18'=> 'REC116',
                                            '19'=> 'REC117',
                                            '20'=> 'REC118',
                                            '21'=> 'REC119',
                                            '22'=> 'REC120',
                                            '23'=> 'REC121'
                                            ); 
                                            echo "
                                        <li><a href='fuente1.php?f1=".$f1."'> <h5>/ Recursos Recaudados Directamente</a></li>
                                        ";
                                        break;
                                        case '35':
                                            $recursos=array(
                                                '0'=> 'REC001',
                                                '1'=> 'REC002',
                                                '2'=> 'REC003',
                                                '3'=> 'REC004',
                                                '4'=> 'REC005',
                                                '5'=> 'REC006',
                                                '6'=> 'REC007',
                                                '7'=> 'REC008',
                                                '8'=> 'REC009',
                                                '9'=> 'REC010',
                                                '10'=> 'REC011',
                                                '11'=> 'REC013',
                                                '12'=> 'REC014',
                                                '13'=> 'REC015',
                                                '14'=> 'REC018',
                                                '15'=> 'REC019',
                                                '16'=> 'REC020',
                                                '17'=> 'REC021',
                                                '18'=> 'REC022',
                                                '19'=> 'REC023',
                                                '20'=> 'REC024',
                                                '21'=> 'REC025',
                                                '22'=> 'REC026',
                                                '23'=> 'REC027',
                                                '24'=> 'REC028',
                                                '25'=> 'REC029',
                                                '26'=> 'REC030',
                                                '27'=> 'REC031',
                                                '28'=> 'REC032',
                                                '29'=> 'REC033',
                                                '30'=> 'REC034',
                                                '31'=> 'REC035',
                                                '32'=> 'REC038',
                                                '33'=> 'REC039',
                                                '34'=> 'REC040',
                                                '35'=> 'REC041',
                                                '36'=> 'REC043',
                                                '37'=> 'REC099',
                                                '38'=> 'REC100',
                                                '39'=> 'REC104',
                                                '40'=> 'REC106',
                                                '41'=> 'REC107',
                                                '42'=> 'REC108',
                                                '43'=> 'REC109',
                                                '44'=> 'REC110',
                                                '45'=> 'REC111',
                                                '46'=> 'REC112',
                                                '47'=> 'REC113',
                                                '48'=> 'REC114',
                                                '49'=> 'REC115',
                                                '50'=> 'REC116',
                                                '51'=> 'REC117'
                                                );
                                            echo "
                                                <li><a href='bienes.php?f1=".$f1."'> <h5>/ Compra de bienes</a></li>
                                                ";
                                        break;
                                        case '36':
                                        $recursos=array(
                                            '0'=> 'REC012',
                                            '1'=> 'REC016',
                                            '2'=> 'REC017',
                                            '3'=> 'REC036',
                                            '4'=> 'REC037',
                                            '5'=> 'REC042',
                                            '6'=> 'REC044',
                                            '7'=> 'REC101',
                                            '8'=> 'REC102',
                                            '9'=> 'REC103',
                                            '10'=> 'REC105',
                                            '11'=> 'REC118'
                                            );
                                                 echo "
                                                    <li><a href='servicios.php?f1=".$f1."'> <h5>/ Contratación de servicios</a></li>
                                                    ";
                                        break; 
                                        
                                        case '37':
                                        $recursos=array(
                                            '0'=> 'REC046',
                                            '1'=> 'REC047',
                                            '2'=> 'REC048',
                                            '3'=> 'REC049',
                                            '4'=> 'REC050',
                                            '5'=> 'REC051',
                                            '6'=> 'REC052',
                                            '7'=> 'REC053',
                                            '8'=> 'REC054',
                                            '9'=> 'REC055',
                                            '10'=> 'REC056',
                                            '11'=> 'REC057',
                                            '12'=> 'REC058',
                                            '13'=> 'REC059',
                                            '14'=> 'REC060',
                                            '15'=> 'REC061',
                                            '16'=> 'REC062',
                                            '17'=> 'REC063',
                                            '18'=> 'REC064',
                                            '19'=> 'REC065',
                                            '20'=> 'REC066',
                                            '21'=> 'REC067',
                                            '22'=> 'REC068',
                                            '23'=> 'REC069',
                                            '24'=> 'REC070',
                                            '25'=> 'REC071',
                                            '26'=> 'REC072',
                                            '27'=> 'REC073',
                                            '28'=> 'REC074',
                                            '29'=> 'REC075',
                                            '30'=> 'REC076',
                                            '31'=> 'REC077',
                                            '32'=> 'REC078',
                                            '33'=> 'REC079',
                                            '34'=> 'REC080',
                                            '35'=> 'REC081',
                                            '36'=> 'REC082',
                                            '37'=> 'REC083',
                                            '38'=> 'REC084',
                                            '39'=> 'REC085',
                                            '40'=> 'REC086',
                                            '41'=> 'REC087',
                                            '42'=> 'REC088',
                                            '43'=> 'REC089',
                                            '44'=> 'REC090',
                                            '45'=> 'REC091',
                                            '46'=> 'REC092',
                                            '47'=> 'REC093',
                                            '48'=> 'REC094',
                                            '49'=> 'REC095',
                                            '50'=> 'REC096',
                                            '51'=> 'REC097'
                                            );
                                          echo "
                                                    <li><a href='libros.php?f1=".$f1."'> <h5>/ Libros y textos para bibliotecas</a></li>
                                                    ";
                                        break;
                                        case '38':
                                        $recursos=array(
                                            '0'=> 'REC045',
                                            '1'=> 'REC098',
                                            '2'=> 'REC119',
                                            '3'=> 'REC120',
                                            '4'=> 'REC121'
                                            );
                                        echo "
                                                        <li><a href='maquiraria.php?f1=".$f1."'> <h5>/ Maquinarias equipo y mobiliario</a></li>
                                                        ";
                                        break; 
                                        case '39':
                                        $recursos=array(
                                            '0' => 'REC001',
                                            '1' => 'REC002',
                                            '2' => 'REC003',
                                            '3' => 'REC004',
                                            '4' => 'REC005',
                                            '5' => 'REC006',
                                            '6' => 'REC008',
                                            '7' => 'REC009',
                                            '8' => 'REC010',
                                            '9' => 'REC011',
                                            '10' => 'REC013',
                                            '11' => 'REC014',
                                            '12' => 'REC015',
                                            '13' => 'REC016',
                                            '14' => 'REC017',
                                            '15' => 'REC019',
                                            '16' => 'REC024',
                                            '17' => 'REC025',
                                            '18' => 'REC026',
                                            '19' => 'REC027',
                                            '20' => 'REC028',
                                            '21' => 'REC030',
                                            '22' => 'REC031',
                                            '23' => 'REC032',
                                            '24' => 'REC034',
                                            '25' => 'REC036',
                                            '26' => 'REC037',
                                            '27' => 'REC041',
                                            '28' => 'REC098',
                                            '29' => 'REC099',
                                            '30' => 'REC100',
                                            '31' => 'REC102',
                                            '32' => 'REC104',
                                            '33' => 'REC105',
                                            '34' => 'REC106',
                                            '35' => 'REC107',
                                            '36' => 'REC108',
                                            '37' => 'REC109',
                                            '38' => 'REC110',
                                            '39' => 'REC111',
                                            '40' => 'REC112',
                                            '41' => 'REC113',
                                            '42' => 'REC114',
                                            '43' => 'REC115',
                                            '44' => 'REC116',
                                            '45' => 'REC117',
                                            '46' => 'REC118',
                                            '47' => 'REC119'
                                        );
                                        echo "
                                            <li><a href='pro_recurso.php?f1=".$f1."'> <h5>/ Primer trimestre</a></li>
                                            ";
                                        break;
                                        case '40':
                                        $recursos=array(
                                            '0' => 'REC007',
                                            '1' => 'REC015',
                                            '2' => 'REC018',
                                            '3' => 'REC020',
                                            '4' => 'REC021',
                                            '5' => 'REC022',
                                            '6' => 'REC023',
                                            '7' => 'REC029',
                                            '8' => 'REC033',
                                            '9' => 'REC035',
                                            '10' => 'REC038',
                                            '11' => 'REC039',
                                            '12' => 'REC040',
                                            '13' => 'REC042',
                                            '14' => 'REC108',
                                            '15' => 'REC118',
                                            '16' => 'REC120',
                                            '17' => 'REC121'
                                            );
                                            echo "
                                            <li><a href='pro_recurso.php?f1=".$f1."'> <h5>/ Segundo  trimestre</a></li>
                                            ";
                                        break;
                                        case '41':
                                        $recursos=array(
                                            '0' => 'REC012',
                                            '1' => 'REC043',
                                            '2' => 'REC044',
                                            '3' => 'REC045',
                                            '4' => 'REC046',
                                            '5' => 'REC047',
                                            '6' => 'REC048',
                                            '7' => 'REC049',
                                            '8' => 'REC050',
                                            '9' => 'REC051',
                                            '10' => 'REC052',
                                            '11' => 'REC053',
                                            '12' => 'REC054',
                                            '13' => 'REC055',
                                            '14' => 'REC056',
                                            '15' => 'REC057',
                                            '16' => 'REC058',
                                            '17' => 'REC059',
                                            '18' => 'REC060',
                                            '19' => 'REC061',
                                            '20' => 'REC062',
                                            '21' => 'REC063',
                                            '22' => 'REC064',
                                            '23' => 'REC065',
                                            '24' => 'REC066',
                                            '25' => 'REC067',
                                            '26' => 'REC068',
                                            '27' => 'REC069',
                                            '28' => 'REC070',
                                            '29' => 'REC071',
                                            '30' => 'REC072',
                                            '31' => 'REC073',
                                            '32' => 'REC074',
                                            '33' => 'REC075',
                                            '34' => 'REC076',
                                            '35' => 'REC077',
                                            '36' => 'REC078',
                                            '37' => 'REC079',
                                            '38' => 'REC080',
                                            '39' => 'REC081',
                                            '40' => 'REC082',
                                            '41' => 'REC083',
                                            '42' => 'REC084',
                                            '43' => 'REC085',
                                            '44' => 'REC086',
                                            '45' => 'REC087',
                                            '46' => 'REC088',
                                            '47' => 'REC089',
                                            '48' => 'REC090',
                                            '49' => 'REC091',
                                            '50' => 'REC092',
                                            '51' => 'REC093',
                                            '52' => 'REC094',
                                            '53' => 'REC095',
                                            '54' => 'REC096',
                                            '55' => 'REC097',
                                            '56' => 'REC101',
                                            '57' => 'REC103',
                                            '58' => 'REC105',
                                            '59' => 'REC118'

                                            );
                                        echo "
                                            <li><a href='pro_recurso.php?f1=".$f1."'> <h5>/ Tercer trimestre</a></li>
                                            ";
                                        break;
                                        case '42':
                                        echo "
                                            <li><a href='pro_recurso.php?f1=".$f1."'> <h5>/ Cuarto trimestre</a></li>
                                            ";
                                        break;


                                    }                                                                                         
                            ?>
                                                                                            
                            
                            <li class="active">/ Recurso</li>
                            
                            
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
                                <?php
                                           
                                    $recurso=array();
                                    $rec=$_GET["rec"];
                                    $query = "call ver_recurso('$rec')";
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
                                       
                                         <h3> ".utf8_encode($recurso[$i][3])."</h3>  
                                         <hr class='small'>                       
                                        ";
                                    }
                                                             
                                ?> 
                                          
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
                                                <li clas><a href="#detalles" data-toggle="tab">Detalles</a>
                                                </li>
                                                <li><a href="#compra" data-toggle="tab">Compra</a>
                                                </li>
                                                 <li><a href="#tareas" data-toggle="tab">Tareas</a>
                                                </li>
                                                <li><a href="#pecosa" data-toggle="tab">Pecosa</a>
                                                </li>

                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="programacion">
                                                    <h4>Programación:</h4>
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
                                                <div class="tab-pane fade" id="detalles">
                                                    <h4>Detalles:</h4>
                                                    <br>

                                                    <?php
                                           
                                                          $recurso=array();
                                                          $rec=$_GET["rec"];
                                                          $query = "call ver_recurso('$rec')";
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
                                                                <p> ".utf8_encode($recurso[$i][4])."</p>
                                                                
                                                                ";
                                                            }
                                                                    // $conexion->close();
                                                        ?>   
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="compra">
                                                    <h4>Compra:</h4>
                                                    <table class="responsive table table-striped table-bordered table-hover">
                                                        <tr class="info">
                                                            <th>Unidad de medida</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio Unitario</th>
                                                            <th>Total</th>
                                                        </tr>
                                                        <tr>
                                                        <?php
                                           
                                                          $recurso=array();
                                                          $rec=$_GET["rec"];
                                                          $query = "call ver_recurso('$rec')";
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
                                                                <td>".$recurso[$i][5]."</td>
                                                                <td>".$recurso[$i][6]."</td>
                                                                <td>".$recurso[$i][7]."</td>
                                                                <td>".$recurso[$i][8]."</td>
                                                                ";
                                                            }
                                                            // $conexion->close();
                                                        ?>
                                                        </tr>
                                                        
                                                    </table>
                                                </div>

                                                <div class="tab-pane fade " id="tareas">
                                                    <h4>Tareas:</h4>
                                                    <ol>
                                                        <?php
                                           
                                                          $tarea=array();
                                                          $rec=$_GET["rec"];
                                                          //$act=$_GET["act"];
                                                          $query = "call ver_tarea_por_recurso('$rec')";
                                                          $result = $conexion->query($query);
                                                          while($row = mysqli_fetch_row($result))
                                                          {
                                                              $tarea[] = $row;
                                                          }

                                                          mysqli_free_result($result);
                                                          $conexion->next_result();
                                                                              

                                                        for ($i=0;$i<count($tarea);$i++)
                                                        {
                                                            echo "
                                                            <li><a href='tarea.php?tar=".$tarea[$i][0]."'>".utf8_encode($tarea[$i][2])."</a></li>
                                                           
                                                            ";
                                                        }
                                                        $conexion->close();
                                                                 
                                                    ?>   
                                             

                                                    </ol>
                                                </div>
                                                <div class="tab-pane fade" id="pecosa">
                                                    <h4>Pecosa:</h4>
                                                    <table class="responsive table table-striped table-bordered table-hover">
                                                        <tr class="info">
                                                            <th>Código</th>
                                                            <th>Fecha</th>
                                                            <th>Detalles</th>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Cod 000</td>
                                                            <td> 09/12/12</td>
                                                            <td>mmmmmmmmm</td>
                                                        </tr>
                                                        
                                                    </table>
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
                            

                            <!-- /.row -->
                            <div class="row">
                                <p style="line-height: 70px; text-align: center;">
                                <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-left"></span><a onclick="window.location = 'recurso1.php'" target="_new" href=" <?php echo "recurso1.php?f1=$f1&posicion=$posicion2&rec=".$recursos[$posicion2].""; ?> " > Anterior</a></button>
                                <button type="submit" class="btn btn-primary"><a onclick="window.location = 'recurso1.php'" target="_new" href=" <?php echo "recurso1.php?f1=$f1&posicion=$posicion&rec=".$recursos[$posicion].""; ?> " > Siguiente </a><span class="glyphicon glyphicon-arrow-right"></span></button></p>
                                        
                            </div>

                            <br> <br>                          
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
