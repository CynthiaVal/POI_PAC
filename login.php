<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


</head>

<body>

    <header>
        
    </header>
  
  <section class="bg-primary" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Iniciar Sesión </h2>
                    <!--<hr class="small"></hr> -->
                    <br> 
                    
                </div>
            </div>
        </div>
    </section>

  <section id="services" class="default">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <!--<h2>Iniciar Sesión</h2>
                    <hr class="small">-->
                    
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        
        <div class="container">
        
                <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body panel-info" >
                        
                        <form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
                            <div class="form-group">
                                <?php
                                error_reporting(E_ALL ^ E_NOTICE);
                                if($_GET["error"]=="si"){
                                    echo "<spam>Verifica tus datos</spam>";
                                    echo "<br>";
                                }else{
                                    echo "Ingresa tus datos <br>";
                                }


                                ?>
                                <label for="usuario">Nombre de Usuario</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                        <input  name="nombre_txt" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                    </div>          
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                                    <input name="password_txt" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label for="sel1">Periodo</label>
                                    <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-book"></span></span>
                                    <select class="form-control" id="semestre" >
                                                    <option>Semestre I</option>
                                                    <option>Semestre II</option>
                                                    
                                    </select>
                                </div>

                            </div>-->

                            
                            <hr/>
                            <p style="line-height: 70px; text-align: center;"><button type="button" class="btn btn-success" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Back</button>
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span>Ingresar</button></p>
                          
                        </form>
                    </div>
                </div>
                </div>
                </div>
                </div>
</section>



    <!--<section id="services" class="services bg-primary">
        
    </section> -->


<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>