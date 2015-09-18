<!DOCTYPE html>
<html>
    <head>
        
        <!-- BOOTSTRAP -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">  
        <script src="js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.animate-colors-min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"


        <!-- RESERVATIONS LIB -->
        <script src="js/reservationsLib/reservationsLib.min.js" type="text/javascript"></script>

        <title>MiSC REZERVACIJŲ SISTEMA</title>
    </head>
    
    <body>
        
        <div class="container">
            <div id="header">
                
                <div id="header-top"></div>
                
                <div id="header-bottom">
                    <div id="hours-frame-header"></div>
                    <div id="Studija-header">
                        <div id="Studija-all"></div>
                        <div class="Studija-pc-header" id="Studija-pc-1"></div>
                        <div class="Studija-pc-header" id="Studija-pc-2"></div>
                        <div class="Studija-pc-header" id="Studija-pc-3"></div>
                        <div class="Studija-pc-header" id="Studija-pc-4"></div>
                        <div class="Studija-pc-header" id="Studija-pc-5"></div>
                        <div class="Studija-pc-header" id="Studija-pc-6"></div>
                        <div class="Studija-pc-header" id="Studija-pc-D"></div>
                    </div>
                    <div id="Auditorija-header">
                        <div id="Auditorija-all"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-1"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-2"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-3"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-4"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-5"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-6"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-7"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-8"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-9"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-10"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-11"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-12"></div>
                        <div class="Auditorija-pc-header" id="Auditorija-pc-D"></div>
                    </div>
                    <div id="EGS-header"></div>
                    <div id="Montazine-header"></div>
                </div>
            </div>
            <div id="grid"></div>
        </div>
        <script type="text/javascript">
                window.onload = function(){
                    sys.view.drawGrid();
                    sys.view.interactive();
                    //sys.view.responses();//console.log(sys.view.properties.idsInGrid.hoursBoxesIds)
                }
        </script>
    </body>
</html>