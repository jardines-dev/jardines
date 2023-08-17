<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardines</title>
    <link rel="stylesheet" href="{{ asset('css/style_nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/document.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--AGREGAR LOS ESTILOS CSS AQUI -->
</head>
<body>

<!-- CONEXIÓN DE BASE DE DATOS -->
<?php
$servername = "localhost";
$username = "prueba";
$password = "Clave2020@";
$dbname = "jardines_old";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");


        
    $sql1 = "SELECT * FROM empresa ";
    $result1=$conn->query($sql1);
    $navbar_footer = mysqli_fetch_row($result1) ;
    
    $sql2 = "SELECT * FROM menu ";
    $result2=$conn->query($sql2);
    $page_menu = mysqli_fetch_row($result2) ;

    $sql3 = "SELECT * FROM menu_detalle ";
    $result3=$conn->query($sql3);
?>


<!-- TERMINA LA CONEXION DE LA BASE DE DATOS -->

<header>
<body>
    <div class="u-navbar">
        <div class="u-navbar-top u-flex-between u-responsive">
            <div class="u-flex-between u-hamber-bar">
                <a href="/">
                    <img class="u-responsive-before" src="{{ asset('img/navbar/logo1.svg') }}" />
                    <!--<img class="u-responsive-after" src="../../assets/img/navbar/logo_responsive.svg" />  Esto es otro comentario -->
                </a>
                <div class="u-responsive-after u-flex-between">
                    <div style="text-align: center;"><a href="../pages/online_payment/">    <img src="{{ asset('img/navbar/card.png') }}" title="Pago en línea">  </a> <br><span style="font-size: 10;color: #327240;">Pago en líneaaaaaaaaaaaaaa</span></div>
                    <div style="text-align: center;padding-left: 10px;"><a href="https://tienda.jardines.pe/"> <img src="../../assets/img/navbar/shop.png"  title="Tienda Virtual"></a> <br><span style="font-size: 10;color: #327240;">Tienda Virtual</span></div>
                    <img class="u-hamber" src="../../assets/img/navbar/hamber.svg" />
                </div>
                
            </div>
            <div class="u-flex-between u-responsive-before">
                <div class="u-flex-between" style="margin-right: 10px;">
                    <div class="u-flex-between">
                        <div class="u-navbar-phone-text">LINEAS DE<br>CONTACTO</div>
                    </div>
                    <div class="u-flex-between">
                        <div class="u-navbar-phone-text" style="font-size: 22px;">24 HORAS</div>
                    </div>
                </div>
                <div class="u-flex-between">
                    <div class="u-flex-between" title ='Línea de contacto para atención inmediata'>
                        <img src="{{asset('img/navbar/phone.svg')}}" />
                        <div class="u-navbar-phone-text"><span style="font-size: 22px;"><?php echo$navbar_footer[3]?></span></div>
                        <!--<div class="u-navbar-phone-text">Línea contacto:<br><span style="font-size: 22px;"><?php echo$navbar_footer[3]?></span></div>!-->
                    </div>
                </div>
                <div class="u-flex-between">
                    <a href="https://tienda.jardines.pe/registrar-visita" target="_black"
                        class="u-navbar-shop u-flex-between u-flex-column">
                        <img src="{{asset('img/navbar/visitar.svg')}}"  />
                        <div>Visita camposanto</div>
                    </a>
                    <a href="/pages/online_payment" class="u-navbar-shop u-flex-between u-flex-column">
                        <img src="{{asset('img/navbar/pagas.svg')}}" />
                        <div>Operaciones en línea</div>
                    </a>
                    <a href="https://tienda.jardines.pe" target="_blank"
                        class="u-navbar-shop u-flex-between u-flex-column">
                        <img src="{{asset('img/navbar/virtual.svg')}}" />
                        <div>Tienda virtual</div>
                    </a>
                    <a href="https://tienda.jardines.pe/ods" target="_blank" 
                        class="u-navbar-shop u-flex-between u-flex-column">
                        <img src="{{asset('img/navbar/garden-plant.svg')}}" />
                        <div>ODS</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="u-navbar-down u-flex-center">
            <ul class="u-navbar-items u-flex-center u-responsive">
                <?php
                // $servername = "localhost";
                // $username = "root";
                // $password = "";
                // $dbname = "jardines_web";

                $conn = new mysqli($servername, $username, $password, $dbname);
                $conn->set_charset("utf8");
                
                $sql = "SELECT title, link FROM menu WHERE tipo='head' ORDER BY ordering ASC";
                $result = $conn->query($sql);
                if (!empty($result) && $result->num_rows > 0)
                {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    echo '<li class="u-navbar-item">
                    <a href="' . $row["link"] . '">' . $row["title"] . '</a>';
                }
                } else
                {
                echo "0 results";
                } 
                 //mysqli_close($conn);
                ?>
            </ul>
        </div>
    </div>


@yield('content')




</body>

</header>


<!-- footer  -->

<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  .main-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0px;
    background-color: #ffffff;
    font-size:15px;
   
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 6px;
  }

  .inner-div {
    flex: 1;
    min-width: 200px;
    margin: 0px;
    padding: 0px;
    background-color: #ffffff;
    box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
    text-align: center;
  }

  .col {
    flex: 1;
    min-width: 200px;
    margin: 0px;
    padding: 5px;
    background-color: #ffffff;
    box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
    text-align: center;
  }

  @media (max-width: 768px) {
    .main-container
      {
        font-size:10px;
    }

    .row {
      flex-direction: column;
      align-items: center;
    }

    .col {
      flex: none;
      width: 100%;
    }
  }
  
  
  
  
  </style>
</head>

<body>
    <div class="u-footer">
        <div class="u-footer-top u-flex-between u-responsive">
                <div class="u-footer-logo">
                <a><img src="{{asset('img/navbar/logo.svg')}}"></a>

                <p><?php echo$navbar_footer[2]?><br>Teléfono: (01)
                    <?php echo$navbar_footer[3]?><br><?php echo$navbar_footer[5]?></p>
            </div>



            <div class="u-footer-items">
                <a href="/pages/team/terminos.pdf" target="_blank" class="u-flex-start u-footer-item u-footer-item1">
                    <img src="{{asset('img/footer/icon1.svg')}}" />&nbsp;&nbsp;&nbsp;Términos y condiciones
                </a><br>
                <a href="/pages/event" class="u-flex-start u-footer-item u-footer-item2">
                    <img src="{{asset('img/footer/icon2.svg')}}" />&nbsp;&nbsp;&nbsp;Eventos y noticias
                </a><br>
                <a href="/pages/today" class="u-flex-start u-footer-item u-footer-item3">
                    <img src="{{asset('img/footer/icon3.svg')}}" />&nbsp;&nbsp;&nbsp;Información del día
                </a>
            </div>
            <div class="u-footer-items">
                <a href="/pages/paymethod" class="u-flex-start u-footer-item u-footer-item4">
                    <img src="{{asset('img/footer/icon4.svg')}}" />&nbsp;&nbsp;&nbsp;Formas de pago
                </a><br>
                <a href="/pages/vouchers" target="_blank" class="u-flex-start u-footer-item u-footer-item5">
                    <img src="{{asset('img/footer/icon5.svg')}}" />&nbsp;&nbsp;&nbsp;Comprobantes
                </a><br>
                <a href="/pages/book" class="u-flex-start u-footer-item u-footer-item6">
                    <img src="{{asset('img/footer/icon6.svg')}}" />&nbsp;&nbsp;&nbsp;Libro de reclamaciones
                </a>
            </div>
            <div class="u-footer-items">
                <a href="/pages/rules" class="u-flex-start u-footer-item  u-footer-item7">
                    <img src="{{asset('img/footer/icon7.svg')}}" />&nbsp;&nbsp;&nbsp;Reglamento interno
                </a><br>
                <a href="/pages/questions" class="u-flex-start u-footer-item u-footer-item8">
                    <img src="{{asset('img/footer/icon8.svg')}}" />&nbsp;&nbsp;&nbsp;Preguntas frecuentes
                </a><br>
                <a href="/pages/social" class="u-flex-start u-footer-item u-footer-item9">
                    <img src="{{asset('img/footer/icon9.svg')}}" />&nbsp;&nbsp;&nbsp;Responsabilidad social
                </a>
            </div>
        </div>
        
      
      <div class="main-container">
      <div class="row">
       
       <div class="u-social-items u-flex-center u-responsive">
                <p>Síguenos:</p>
                <div class="u-flex-between">
                    <a href="https://www.facebook.com/jardinesdelapazoficial" target="_blank"  class="u-social-item u-flex-center"><img
                            src="{{asset('img/footer/social1.svg')}}" /></a>
                    <a href="https://www.instagram.com/jardinesdelapazoficial/" target="_blank"  class="u-social-item u-flex-center"><img
                            src="{{asset('img/footer/social4.png')}}" /></a>
                    <a href="https://www.youtube.com/channel/UCQ-q1U6NHuhHnWl2nERpNPQ" target="_blank" 
                        class="u-social-item u-flex-center"><img src="{{asset('img/footer/social3.svg')}}" /></a>
                </div>
       </div>
     </div>
     
    <div class="row">
  
      <div class="u-social-items u-flex-center u-responsive">
           <div> 
             <img src="{{ asset('img/footer/fiat.jpg')}}" style="max-width:100px;width:100%">
            </div>
             <div> 
                <img src="{{ asset('img/footer/asociacion.png')}}" style="max-width:250px;width:100%">
            </div>
             <div> 
             <img src="{{ asset('img/footer/iccfa.jpg')}}" style="width: 100%;max-width:100px">
            </div>
               <div> 
                   <img src="{{ asset('img/footer/nfda.jpg')}}" style="width: 100%;max-width:100px">
            </div>
               <div> 
                   <img src="{{ asset('img/footer/gptk.png')}}" style="width: 100%;max-width:60px;margin-left:10px">
            </div>
      </div>
    
    </div>
    
     <div class="row">
        
      <div class="col">
        <?php echo$navbar_footer[6]?>
      </div>
      
    </div>
  </div>
             <!--<div class="u-responsive-before">© 2023 Jardines de la Paz</div>-->
            <!--<div class="u-responsive-before"><div class="u-flex-between"><?php echo$navbar_footer[6]?></div></div>-->
        
    </div>
    <div class="u-loader u-flex-around">
        <div class="loader recursive-circle"></div>
    </div>
  
  
    
<!-- JAVASCRIPT DE BOOTSTRAP -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script v2 id="Microsoft_Omnichannel_LCWidget" src=https://oc-cdn-public-sam.azureedge.net/livechatwidget/scripts/LiveChatBootstrapper.js data-app-id="2b959833-c4d4-409d-9d01-9781a7d43bf4" data-lcw-version="prod" data-org-id="738b4ae8-c4bf-4a52-875c-3e46b48efdea" data-org-url=https://unq738b4ae8c4bf4a52875c3e46b48ef-crm2.omnichannelengagementhub.com></script>

<!-- JAVASCRIPT DE BOOTSTRAP -->

    

</body>
</html>