
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/document.css') }}">
    
    <style>



        .contenedor 
        {
        position: absolute;
        float: left;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        }
        .u-alert-size{
            margin-top: 15%;
            margin-left: 25%;
        }
        @media only screen and (max-width: 600px) 
        {
            .contenedor {
                position: absolute;
                float: left;
                left: 0%;
                top: 40%;
                transform: translate(0%, -40%);
            }
            .u-alert-size-mobile{
                margin-top: 50%;
                margin-left: 10%;
            }
        }
        .u-border-red {
            border-color: red!important;
            color: red!important;
        }
        .u-alert {
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            width: 100vw;
            height: 100vh;
            display: none;
            z-index: 900;
        }

        .u-alert-main {
            height: 300px;
            width: 80%;
            max-width: 600px;
            background-color: white;
            border-radius: 20px;
        }

        .u-alert-main-title {
            font-size: 25px;
            text-align: center;
            padding: 20px;
            color: grey;
        }
        
        .comboSelector{
            color: inherit;
            font: inherit;
            margin: 0;
            width: 100%;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 5px 10px;
        }

        .u-alert-main-btn {
            width: 200px;
            height: 40px;
            border-radius: 20px;
            background-color: #118081;
            color: white;
            cursor: pointer;
        }
        .u-home-3carousel-bottom-btn a,
        .u-home-3carousel-bottom-btn-res a,
        .u-home-sec_3-btn a{color:white!important}

  </style>
        

    <title>Jardines</title>
    <link href="{{ asset('img/navbar/logo_responsive.svg') }}" rel="icon">

    <link href="{{ asset ('img/navbar/logo_responsive.svg') }}" rel="apple-touch-icon">

    <!-- header and footer -->
    <link rel="stylesheet" href="./layout/navbar/style.css">
    <link rel="stylesheet" href="./layout/footer/style.css">
    
    
   
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    
 
    <!-- header and footer -->
</head>

<body>
    
    
  
    
<div class="modal fade" id="global-modal" role="dialog">
      
<div class="contenedor"    >
  
 <button type="button" class="btn btn-secondary" style="background: rgba(0, 0, 0, 0.0);color: white;font-size: 14px;"  data-dismiss="modal">Cerrar</button>
    
  
    
 

</div>

</div>
 <!-- fin modal pagina principal-->
 <!-- ===========================-->
    <div>
        <div class="u-flex-center u-responsive-after"
            style="position: fixed; top: 0; right: 0; left: 0; z-index: 2; background-color: #327240; height:50px">
            <div class="u-flex-between">
                <div class="u-flex-between" >
                    <img src="{{ asset ('img/navbar/phone.svg') }} />
                    <div class="u-navbar-phone-text">Línea contacto:</span>
                    </div>
                </div>
                <!--
                <div class="u-navbar-phone-text">Línea gratuita:<br><span></span></div>
                -->
            </div>
        </div>
        
        <!-- header html code -->

        <style>
            @media (max-width: 768px){
                #vendedoras{margin-top:60px}
            }
        </style>
        <div class="main_page_header u-flex-between" style="min-height:auto">

            
            <a href='/pages/contact' class="carousel_btn" id="vendedoras">
                <div class="carousel_pic">
                   
                </div>
                <div class="carousel_text">Compra en prevención<br>Empieza a planificar hoy<br>Contacta a una supervisora</div>
                <!--<div class="carousel_text">PARA ATENCION ANTICIPADA Contacta una<br>supervisora<br><span>LAS 24 HORAS</span></div>!-->
            </a>

            <style type="text/css">
                @media only screen and (min-width: 1024px){
                    .u-carousel_items {top: 0px}
                    #u-home-sec_2 {min-height: 80vh}
                }
            </style>
            <a href="#u-home-sec_2" class="u-scroll_btn u-flex-around">
                <img src="{{ asset('img/home_page/scroll.svg') }}">
            </a>
            <a class="u-covid u-flex-center" href="https://tienda.jardines.pe/registrar-visita/" target="_blank"><img src="{{ asset ('img/home_page/arrown_top.svg') }}">
                 VISITAS A CAMPOSANTOS Y PROTOCOLO DE BIOSEGURIDAD AQUI
                <img src="{{ asset('img/home_page/arrown_top.svg') }}">
            </a>
        </div>
        <!-- header html code -->
        <!-- section2 html code -->
        <div class="u-home-sec_2 u-flex-around" id="u-home-sec_2">
            
            
   
            
           
           
        <div class="u-carousel_btn-p u-flex-around"><img src="./assets/img/home_page/section2/carousel_p.svg"/></div>
        <div class="u-carousel_btn-n u-flex-around"><img src="./assets/img/home_page/section2/carousel_n.svg"/></div>
            
        </div>
        <!-- section2 html code -->
        <!-- section3 html code --> 
        <div class="u-home-sec_3 u-flex-around u-responsive">
            <div class="u-responsive-before"><img src="./assets/img/home_page/section3.png" /></div>
            <div class="u-home-sec_3-discs">
                <div class="u-home-sec_3-title">Servicios virtuales y recuerdos</div>
                <div class="u-carousel_disc">Conozca nuestros nuevos servicios complementarios virtuales. Podrá hacer
                    llegar a sus familiares y amigos: materiales religiosos y recuerdos, acortemos la distancia.</div>
                <div class="u-home-sec_3-btn u-flex-around"> <a  href="https://tienda.jardines.pe/servicios-virtuales/" >VER NUESTROS SERVICIOS</a> </div>
            </div>
            <div class="u-responsive-after"><img src="./assets/img/home_page/section3.png" /></div>
        </div>
        <!-- section3 html code -->
        <!-- section4 html code -->
        <div class="u-home-sec_4">
            <div class="u-home-3carousel-header">Camposantos</div>
            
            <div class="u-home-3carousel-body u-flex-around u-responsive-before">
                <div class="u-home-3carousel-btns u-flex-around">
                    <div class="carousel-btns-circle u-home-3carousel-items-btn-p u-flex-around">
                        <img src="./assets/img/3carousel_p.svg" />
                    </div>
                    <div class="carousel-btns-circle u-home-3carousel-items-btn-n u-flex-around">
                        <img src="{{ asset('img/3carousel_n.svg') }}" />
                    </div>
                </div>
                
            
             
       </div>
    </div>
        <!-- section4 html code termina seccion camposanto -->

        <!-- section5 html code --> 
        <div class="u-home-sec_5">
            <div class="u-home-3carousel-header-sec_5">Cremaciones</div>
            <div class="u-home-3carousel-body u-flex-around u-responsive-before">
                <div class="u-home-3carousel-btns u-flex-around u-flex-column">
                    <!--
                    <div class="u-flex-around" style="width: 100%;">
                        <div class="carousel-btns-circle u-home-3carousel-items-btn-p-sec5 u-flex-around">
                            <img src="./assets/img/3carousel_p.svg" />
                        </div>
                        <div class="carousel-btns-circle u-home-3carousel-items-btn-n-sec5 u-flex-around">
                            <img src="./assets/img/3carousel_n.svg" />
                        </div>
                    </div> --> 
                    <div class="u-home-3carousel-bottom-btn u-flex-around"><a  href="https://tienda.jardines.pe/iniciar-cremaciones/" >ADQUIRIR CREMACIONES</a>  </div>
                </div>
                <div class="u-home-3carousel-slides-sec5 u-3carousel-active">
                    
                         
        
         
            </div>
         
        </div>
        <!-- section5 html code -->
        <!-- section6 html code -->
        <div class="u-home-sec_6">
            <div class="u-home-3carousel-header-sec_6">Servicios funerarios</div>
            
            <div class="u-home-3carousel-body u-flex-around u-responsive-before">
                <div class="u-home-3carousel-btns u-flex-around u-flex-column">
                    <div class="u-flex-around" style="width: 100%;">
                        <div class="carousel-btns-circle u-home-3carousel-items-btn-p-sec6 u-flex-around">
                            <img src="./assets/img/3carousel_p.svg" />
                        </div>
                        <div class="carousel-btns-circle u-home-3carousel-items-btn-n-sec6 u-flex-around">
                            <img src="./assets/img/3carousel_n.svg" />
                        </div>
                    </div>
                    <div class="u-home-3carousel-bottom-btn u-flex-around"><a  href="https://tienda.jardines.pe/iniciar-ssff/" >ADQUIRIR SERVICIOS</a>  </div> 
                    
                    
                </div>
               
         <!-- primer error encontrado no existia el res linea 589-->   
       
      </div>
      </div>
       
        <!-- section6 html code -->

        <!-- section7 html code -->
     
        <div class="u-home-sec_7">
            <div class="u-home-3carousel-header-sec_7">Mural de Memorias</div>
            <div class="u-home-3carousel-body u-flex-around u-responsive-before">
                <div class="u-home-3carousel-btns u-flex-around u-flex-column">
                    <!--
                    <div class="u-flex-around" style="width: 100%;">
                        <div class="carousel-btns-circle u-home-3carousel-items-btn-p-sec7 u-flex-around">
                            <img src="./assets/img/3carousel_p.svg" />
                        </div>
                        <div class="carousel-btns-circle u-home-3carousel-items-btn-n-sec7 u-flex-around">
                            <img src="./assets/img/3carousel_n.svg" />
                        </div>
                    </div>
                    -->
                    <div class="u-home-3carousel-bottom-btn u-flex-around"><a href="https://tellmebye.com/jardinesdelapaz" target="_blank">VER TODOS</a> </div>
                </div>
        <div class="u-home-3carousel-slides-sec7 u-3carousel-active">   
    

         <!-- quitando seccion de comentarios-->     
        <!-- section7 html code -->
        <!-- contact section html code -->
        <div class="u-contact u-responsive">
            <div class="u-contact-disc">
                <div class="u-contact-disc-back-black"></div>
                <div class="u-contact-disc-title"><span>Estamos contigo</span> en<br>el momento más difícil</div>
                <div class="u-contact-disc-disc">Nuestros asesores especializados le brindarán soporte emocional y guía
                    en los momentos más difíciles a enfrentar durante una pérdida. Asegure la paz de su familia y
                    empiece a planificar hoy.</div>
            </div>
            <div class="u-contact-form">
                <div class="u-contact-form-title">Escríbenos:</div>
                <div class="u-contact-form-line"> </div>
                <div class="u-flex-between u-responsive">
                    <div class="u-contact-form-input">
                        <div>&nbsp;Nombres</div>
                        <input id="contact-firstname" type="text"/>
                    </div>
                    <div class="u-contact-form-input">
                        <div>&nbsp;Apellidos</div>
                        <input id="contact-lastname" type="text"/>
                    </div>
                </div>
                <div class="u-flex-between u-responsive">
                    <div class="u-contact-form-input">
                        <div>&nbsp;Correo electrónico</div>
                        <input id="contact-emails" type="email"/>
                    </div>
                    <div class="u-contact-form-input">
                        <div>&nbsp;Teléfono</div>
                        <input id="contact-telphone" type="tel"/>
                    </div>
                </div>
                <div >
                    <div>&nbsp;Sede</div>
                    <select id="id_sede" class="comboSelector">
                                <option value="lima">Lima</option>
                                <option value="chiclayo">Chiclayo</option>
                                <option value="trujillo">Trujillo</option>
                     </select>
                </div>
                <div class="u-contact-form-input u-contact-form-textarea">
                    <div>&nbsp;Deje aquí su consulta</div>
                    <textarea id="contact-texts" rows="4"></textarea>
                </div>
                <div class="u-contact-form-quote">
                    <label>¿Deseas una cotización?</label>
                    <input type="radio" name="cotization-radio" id="cotization-radio" value="S" checked />
                    <label>Si</label>
                    <input type="radio" name="cotization-radio" id="cotization-radio" value="N"/>
                    <label>no</label>
                </div>
                <div class="u-contact-form-quote">
                    <label>¿Deseas recibir información sobre novedades y promociones?</label>
                    <input type="radio" name="promotion-radio" id="promotion-radio" value="S" checked />
                    <label>Si</label>
                    <input type="radio" name="promotion-radio" id="promotion-radio" value="N"/>
                    <label>no</label>
                </div>
                <div class="u-contact-form-quote">
                    <input type="checkbox" id="contact-checkbox"/> 
                     <label id="contact-checkbox-text">Acepto los </label>
                    <a style="color:#118081;" href="/pages/team/terminos.pdf" alt="términos y condiciones" target="_blank" id="contact-checkbox-text"> 
                            <b><u>términos y condiciones</u> </b> </a>
                            
                   
                </div>
                <div id="btn-enviar" class="u-contact-form-sub-btn u-flex-around" style="background:#118081; cursor: pointer;" onclick="sendMessage()">ENVIAR</div>
                <div id="btn-enviando" class="u-contact-form-sub-btn u-flex-around" style="display:none">Enviando....</div>
            </div>
            <!-- contact section html code -->
        </div>
       
        <!-- 
        <div class="u-messege">
            <div class="u-m-header-btn u-flex-around"><img src="./assets/img/home_page/messege.svg" /></div>
            <div class="u-m-header"></div>
            <div class="u-m-body">
                <div class="u-m-b-items">Buenos días, mi nombre es Juana ¿En qué puedo ayudarte?</div>
            </div>

        </div>
        -->
        <div class="u-alert u-flex-around" id="modal-success">
            <div class="u-alert-main u-flex-around u-flex-column u-alert-size u-alert-size-mobile">
                <div class="u-alert-main-title u-flex-around" id="modal-success-message"></div>
                <div class="u-alert-main-btn u-flex-around" onclick="closeModal()">Cerrar</div>
            </div>
        </div>

<img src="{{ asset('img/carousel_avatar.jpg') }}" alt="IMAGEN DE PRUEBA">



</body>

<!-- se retira comentario java script-->

</html>