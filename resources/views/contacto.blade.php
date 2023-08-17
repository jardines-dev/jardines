@extends('layout')

@section('content')

<head>
    <link rel="stylesheet" href="{{asset('css/style_contacto.css')}}">
</head>

<div>
       
        <div class="u-header">
            <div class="u-header-background u-flex-around">
                <img src="../../assets/img/contactus_page/header_background.jpg" />
            </div>
            <div class="u-header-title">Contáctenos</div>
            <a href='/pages/contact' class="carousel_btn">
                <div class="carousel_pic">
                    <?php $flag_carousel=rand(1, 8); echo "<img src = '../../assets/img/contact_page/avatar" . $flag_carousel . ".jpg' / >"?>
                </div>
                <div class="carousel_text">Contacta una<br>supervisora<br><span>LAS 24 HORAS</span></div>
            </a>
        </div>
        <div class="u-contact-body u-responsive">
            <div class="u-contact-form">
                <div class="u-contact-title">Escríbenos</div>
                <form>
                    <div class="u-book-input">
                        <div>&nbsp;&nbsp;Nombres</div>
                        <input id="contact-firstname" type="text" />
                    </div>
                    <div class="u-book-input">
                        <div>&nbsp;&nbsp;Apellidos</div>
                        <input id="contact-lastname" type="text" />
                    </div>
                    <div class="u-book-input">
                        <div>&nbsp;&nbsp;Correo electrónico</div>
                        <input id="contact-emails" type="email" />
                    </div>
                    <div class="u-book-input">
                        <div>&nbsp;&nbsp;Teléfono</div>
                        <input id="contact-telphone" type="tel" />
                    </div>
                    
                       <div >
                    <div>&nbsp;Sede</div>
                    <select id="id_sede" class="comboSelector">
                                <option value="lima">Lima</option>
                                <option value="chiclayo">Chiclayo</option>
                                <option value="trujillo">Trujillo</option>
                     </select>
                    </div>
                    
                 
                 
                    
                    <div class="u-book-input u-book-input-textarea">
                        <div>&nbsp;&nbsp;Descripción</div>
                        <textarea id="contact-texts" rows="5"></textarea>
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
                  </p>  
                    
                    <div><input type="checkbox" id="contact-checkbox" />He leído y
                            acepto la política de
                            privacidad y los <a style="color:#118081;" href="/pages/team/terminos.pdf" alt="términos y condiciones"
                            target="_blank" id="contact-checkbox-text"> 
                            <b><u>términos y condiciones</u> </b> </a>
                    </div>
                    <div class="u-contac-btn u-flex-around u-contac-btn-send-mail" id="btn-save-data">ENVIAR</div>
                </form>
            </div>
            <div class="u-contact-map">
                <div class="u-contact-title">Ubícanos</div>
                <div class="u-contact-dexc">
                    <span>Oficina administrativa</span>: Av. San Borja Sur 1190<br>
                    <strong>Horario de atención</strong> Lunes a viernes de 9:00 am a 5:00 pm | Sábados de 9:00 am a 12:00 am<br>
                    <span>Teléfono</span>: (01)               </div>
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.1352850851854!2d-76.99273204854856!3d-12.102889746202722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7c101457237%3A0x6856b182d793b724!2sJardines%20de%20la%20Paz%20-%20Oficinas%20administrativas!5e0!3m2!1ses-419!2spe!4v1631855645715!5m2!1ses-419!2spe"></iframe>
            </div>
        </div>
    </div>
    <div class="u-alert u-flex-around">
        <div class="u-alert-main u-flex-around u-flex-column">
            <div class="u-alert-main-title u-flex-around">Gracias por escribirnos, en breve un ejecutivo se pondrá en
                contacto con usted.</div>
            <div class="u-alert-main-btn u-flex-around">Cerrar</div>
        </div>
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./javascript.js"></script>
    <script type="text/javascript" src="../../layout/navbar/javascript.js"></script>





@endcontent