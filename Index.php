<?php
include ("Header.php")
?>
    <br><br>
    <main>
        <section class="container-slider">
            <div class="slider" id="slider">
                <div class="slider__section">
                    <img src="IMAGENES/slider1.jpg" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="IMAGENES/slider2.jpg" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="IMAGENES/slider3.jpg" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="IMAGENES/fondo-jardin-slider1.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="IMAGENES/fondo-jardin-slider2.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="IMAGENES/fondo-tizas.png" alt="" class="slider__img">
                </div>
            </div>
            <div class="slider__btn slider__btn--rigth" id="btn-rigth">&#62;</div>
            <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
        </section>
    <br><br><br>
    <div id="salones1">
    <section id="sal" >
            <div class="am">
                <div><h2>La trayectoria no se improvisa, años de experiencia en educación a la infancia</h2><br>
                <p>Ofrecemos una educación exigente y valiosa orientada a la participación y motivación a las artes lúdicas. (Danzas, Coros, Percusión e Instrumentos).
                    Nuestras profesoras son licenciadas en preescolar y con alta experiencia académica.
                </p><br>
                    <p>Atención y formación individualizada y personalizada.</p><br>
                   <p>Aulas especializadas, con grupos pequeños Horarios flexibles de 6:30am a 6:00pm.</p><br>
                    <p> Escolar de mediados de Enero a mediados de Diciembre.</p><br>
                    <p>Convenios con excelentes colegios de Bachillerato internacional y bilingües.</p></div>
                    <div class="imagen"></div>
            </div>  
    </section></div><br><br>
   <section id="salones">
       <div class="aa">
            <h2>Nuestros Espacios</h2><br>
            <p>Conoce nuestros espacios para que tus hijos se sientan libres de expresarse y divertirse, con la tranquilidad y confianza que brindamos</p>   
        </div><br><br>
        
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th><h4>Canto</h4></th>
                    <th><h4>Cocina</h4></th>
                    <th><h4>Sistemas</h4></th>
                </tr>
                <tr>
                    <td><img src="IMAGENES/Canto.jpg"></td>
                    <td><img src="IMAGENES/cocina.jpg"></td>
                    <td><img src="IMAGENES/computo.jpg"></td>
                </tr>
                <tr>
                    <th><h4>Teatro</h4></th>
                    <th><h4>Didacticos</h4></th>
                    <th><h4>Ludica</h4></th>
                </tr>
                <tr>
                    <td><img src="IMAGENES/fisico.jpg"></td>
                    <td><img src="IMAGENES/ludica.jpg"></td>
                    <td><img src="IMAGENES/transito.jpg"></td>
                </tr>
            </table>
        </div><br>
        <div class="container">
            <button class="btn" id="open_modal">MAS INFORMACION CONTACTANOS</button>
            <div class="modal" id="modal">
                <div class="fondoModal" id="fondoModal"></div>
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="title-modal">CONTACTANOS</div>
                            <button class="btn-close-modal" id="close_modal"></button>
                        </div>
                            <div class="modal-body">
                                <div id="form">
    
                                    <div class="fish" id="fish"></div>
                                    <div class="fish" id="fish2"></div>
                                    
                                    <form id="waterform" method="#">
                                    
                                    <div class="formgroup" id="name-form">
                                        <label for="name">NOMBRES</label>
                                        <input type="text" id="name" name="name" />
                                    </div>
                                    
                                    <div class="formgroup" id="email-form">
                                        <label for="email">CORREO ELECTRONICO</label>
                                        <input type="email" id="email" name="email" />
                                    </div>
                                    
                                    <div class="formgroup" id="message-form">
                                        <label for="message">MENSAJE</label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>
                                    
                                        <input type="submit" value="Envia tu Mensaje !" /><br><br><br>
                                    </form>
                                    </div>
                            </div>
                    </div>
            </div>
        </div>
        </section>

    </main>
<?php

include ('Footer.php')

?>  
    </div>
    <script src="JS/slider.js"></script>
    <script src="JS/modal.js"></script>
</body>
</html>