<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>
</head>
<body>
<header  id="inicio">
       <div class="menu" id="menu">
           <div class="content-menu" >

                <!-- Logo -->
                <div class="logo">
                        <figure class="img-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_img_perubroker.png" alt="logo PERU BROKER">
                        </figure>
                        <div class="text-logo">
                            <h1>Peru Broker S A</h1>
                        </div>
                </div>

                <!-- MENU -->
                <nav class="lista-menu">
                    <div class="bar"></div>
                    <ul>
                        <li><a href="#inicio"class="goto active">Inicio</a></li>
                        <li><a href="#nosotros"class="goto ">Nosotros</a></li>
                        <li><a href="#servicios"class="goto ">Servicios</a></li>
                        <li><a href="#clientes"class="goto ">Clientes</a></li>
                        <li><a href="#reportes"class="goto ">Reportes</a></li>
                        <li><a href="#contacto"class="goto ">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>        
<!-- FIN - BARRA DE ARRIBA -->
<!-- HERO -->
    <div class="row">
        <div class="col">
            <section class="hero">
                <div class="img-hero">
                    <!-- <video src="img/portada 1 animación.mp4" autoplay loop type="video/mp4" poster="img/portada_1.jpg" ></video>  -->
                </div>

                <div class="degradado1"></div>
                <!-- <div class="degradado2"></div> -->
                <div class="idioma">
                    <span class="es">ES</span>
                    <span>/</span>
                    <span class="en">EN</span>
                </div>
                <div class="btn-up">
                    <img class="icon-up" src="<?php echo get_template_directory_uri(); ?>/img/up.svg">
                </div>
                
                <div class="chat">
                    <img class="icon-messenger" src="<?php echo get_template_directory_uri(); ?>/img/messenger.svg" alt="">
                </div>
            </section>
        </div>
    </div>
<!-- FIN HERO -->

<!-- Sección NOSOTROS -->
    <section class="nosotros" id="nosotros">
        <div class="content" ><!-- INICIO-CONTENT -->
            <div class="row">
                <div class="col">
                    <h2>Nosotros</h2>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-sm-12">
                    <div class="swiper-container tabs-buttons">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide"><a href="#resumen">Resumen</a></li>
                            <li class="swiper-slide"><a href="#historia">Historia</a></li>
                            <li class="swiper-slide"><a href="#objetivos">Objetivos</a></li>
                            <li class="swiper-slide"><a href="#idea_futuro">Idea a futuro</a></li>
                            <li class="swiper-slide"><a href="#divisiones">Divisiones</a></li>
                        </ul>
                    </div>
                      
                    <div class="tabs-content">
                        <div class=" contenido-item">

                            <!-- Resumen -->
                            <div id="resumen" class="item ocultar">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <p>Vinculados al comercio internacional desde 1949, y muy especialmente a la industria pesquera, Perú Broker S.A.  es hoy una de las empresas líderes en nuestro país en el sector de las representaciones y corretaje.</p>
            
                                        <p>Entre nuestros clientes, tanto a nivel nacional como internacional, se encuentran tanto grandes multinacionales  así como empresas relativamente pequeñas y familiares. Tanto en un caso  como en el otro, nos centramos en trabajar exclusivamente con aquellas compañías que  demuestran responsabilidad y compromiso en sus  obligaciones contractuales. En base a los  comentarios que hemos recibido de nuestros proveedores y clientes a  lo largo de nuestra  dilatada trayectoria, hemos llegado a la absoluta seguridad de que brindamos un servicio de  primera categoría.</p>
                                        
                                        <p>Conocedores por décadas de las actividades económicas de nuestro país, nuestros contactos  van más allá del  sector pesquero (estamos centrados principalmente en harina y aceite de  pescado y congelado) e incluyen  segmentos de enorme consideración en la vida del Perú, como  son la minería, fletamentos, energía, azúcar,  café, sal marina y de mina, granos, legumbres,  aceites, grasas y otros.</p>
                                    
                                    </div>
                                    <div class="col">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/historia_logo_perubroker.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Resumen -->
                            
                            <!-- Historia -->
                            <div id="historia" class="item ocultar" >
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <p>PERU BROKER se fundo y constituyo en lima, Perú, en febrero del año 1981, habiendo estado los accionistas y directivos relacionados con el comercio internacional de materias primas desde 1954.</p>
                                        <p>Hoy actuamos como agentes representantes de compañías extranjeras y como comisionistas, para una diversa gama de productos. Además, hemos desarrollado a lo largo de los años, un departamento ágil y eficaz de “shipping” o agente de fletamentos, que facilita y economiza  los embarques de nuestros proveedores.
                                        </p>
                                        <p>Contamos con socios estratégicos en Europa, que cuentan con la misma experiencia además de un amplísimo número de clientes y proveedores; antiguos y nuevos, pero todos ellos de solvencia.</p>
                                        <p>Esta asociación estratégica con otra empresa europea de gran reconocimiento en el sector, Hispatrade SA, nos permite, por la diferencia de husos horarios, cubrir de manera adecuada y casi 24 horas diarias, los requerimientos de nuestros clientes asiáticos y los de otros continentes.</p>
                                        <p>En PERU BROKER S.A. estamos muy al corriente de los requerimientos nutricionales y de las ventajas que tienen tanto la harina como el aceite de pescado, especialmente los de anchoveta peruana (engraulis ringens) en la elaboración de alimento para una amplia variedad de especies, y nunca perdiendo de vista la responsabilidad biológica de este recurso así como del medio ambiente marino básico en el desarrollo de esta actividad.</p>
                                    </div>
                                </div>         
                            </div>
                            <!-- Fin Historia -->

                            <!-- Objetivos -->
                            <div id="objetivos" class="item ocultar" >
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <p>Asistir a clientes y proveedores con una información imparcial, basada en hechos. Brindar igualmente las últimas novedades sobre las circunstancias del mercado y los factores que están influyendo en el mismo; los últimos precios tratados y su evolución en las últimas semanas.

                                        Servir a los clientes interesados en la compra de productos, con los precios más económicos disponibles de proveedores de primer orden, sean grandes o pequeños, pero de probada seriedad y alta calidad.
                                        
                                        Atender a los clientes y proveedores con una ejecución muy profesionalizada de los contratos, siendo la rapidez, la precisión, la información, y la capacidad de resolver problemas que pudieran surgir en los embarques, nuestras principales cualidades y cartas en el servicio.
                                        
                                        En resumen: servir a clientes y proveedores buscando su satisfacción.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Objetivos -->

                            <!-- Idea a futuro -->
                            <div id="idea_futuro" class="item ocultar" >
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <p>Estar alertas y adaptarnos a las nuevas circunstancias de la evolución de los mercados de materias primas, siempre teniendo presente que realizamos y cumplimos una función de ayuda y servicio tanto a los proveedores como a los clientes, labor que venimos realizando desde los inicios de PERU BROKER SA, ahorrando el tiempo en el proceso de compra y ejecución, pero también evitando el desgaste de una relación, cuando se presentan problemas.

                                        Cabe mencionar que estamos desde ya totalmente involucrados en las nuevas tendencias de consumo humano, como los aceites de alto contenido de ácidos grasos Omega-3 y de las harinas especiales, procesadas mediante hidrólisis por fermentación, de  más alta disponibilidad proteica.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin idea a futuro -->

                            <!-- Divisiones -->
                            <div id="divisiones" class="item ocultar" >
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <p>Podemos dividir en dos las áreas de nuestra empresa:</p>
                                        <p>- Corretaje de productos propiamente dichos
                                        </p>
                                        <p>- Fletamentos</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin divisiones -->

                        </div>
                    
                    </div>
                </div>
            </div>
        </div><!-- FIN-CONTENT -->
    </section>
<!-- FIN Sección NOSOTROS -->  
<!-- Sección STAFF --> 
<section class="staff">
        <div class="content"><!-- INICIO-CONTENT -->
        <div class="row">
            <div class="col">
                <h3>Staff</h3>
                <div class="content-item swiper-container">
                    <div class="swiper-wrapper">
                        <div class="item-staff swiper-slide">
                            <figure class="img-staff">
                                <img src="img/staff.png" alt="">
                            </figure>
                            
                            <p>Nombre y apellido</p>
        
                            <span>Puesto</span>
                        </div>
            
                        <div class="item-staff swiper-slide">
                            <figure class="img-staff">
                                <img src="img/staff.png" alt="">
                            </figure>
                            
                            <p>Nombre y apellido</p>
        
                            <span>Puesto</span>
                        </div>

                        <div class="item-staff swiper-slide">
                                <figure class="img-staff">
                                    <img src="img/staff.png" alt="">
                                </figure>
                                
                                <p>Nombre y apellido</p>
            
                                <span>Puesto</span>
                            </div>
                    </div>
                </div>
                

            </div>
        </div>
        </div>
    </section>
<!-- Fin sección STAFF --> 

<!-- SECCION SERVICIOS -->
    <section class="servicios" id="servicios" >
        <div class="content"><!-- INICIO-CONTENT -->

            <div class="row">
                <div class="col">
                    <h2>Servicios</h2>
                </div>
            </div>
    
            <div class="row" data-aos="zoom-in-left" data-aos-duration="1000">
                <div class="col-sm-12">
                    <h3>Productos</h3>
                    
                    <p>- Proteínas marinas (especialmente harina de pescado, materia prima en la que tenemos un papel destacado a nivel global) - Aceites marinos y vegetales - Productos agrícolas y del campo, en fresco o procesados. - Pescado y mariscos congelados entero y/o procesado y en conserva. - Melazas y alcoholes I</p>

                
                    <figure class="productos">
                        <img src="img/producto_1.png" alt="">
                        <img src="img/producto_1.png" alt="">
                        <img src="img/producto_1.png" alt="">
                    </figure>

                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>Fletamentos</h3>
                    <p>Contratación de contenedores de exportación desde Perú y de la región, superando los 10,000 Teus de 40 pies anuales y ocasionalmente buques trampa. PERU BROKER S.A. opera en una serie de productos pesqueros que va desde pescado y mariscos congelados, conservas, harinas de variada calidad y uso, así como en aceites tanto de uso animal como de consumo humano o farmacéutico. Esta labor se hace de la mano de los productores pesqueros más serios, con el respeto que corresponde mantener con el medio ambiente y las reglas establecidas para su protección.</p>

                    <figure class="fletamento">
                            <img src="img/fletamento_1.png" alt="">
                            <img src="img/fletamento_2.png" alt="">
                            <img src="img/fletamento_3.png" alt="">
                        </figure>
                </div>
            </div>
        </div><!-- FIN-CONTENT -->
    </section>
<!-- FIN SERVICIOS -->

<!-- SECCIÓN CLIENTES -->
    <section class="clientes" id="clientes">
        <div class="content"><!-- INICIO-CONTENT -->
        <div class="row">
            <div class="col">
                <h2>Clientes</h2>
                <div class="content-item-clientes swiper-container">
                        <div class="swiper-wrapper">
                            <div class="item-clientes swiper-slide">
                                <figure class="img-staff">
                                    <img src="img/staff.png" alt="">
                                </figure>
                                
                                <p>Nombre del cliente</p>
                            </div>

                            <div class="item-clientes swiper-slide">
                                <figure class="img-staff">
                                    <img src="img/staff.png" alt="">
                                </figure>
                                
                                <p>Nombre del cliente</p>
                            </div>

                            <div class="item-clientes swiper-slide">
                                    <figure class="img-staff">
                                        <img src="img/staff.png" alt="">
                                    </figure>
                                    
                                    <p>Nombre del cliente</p>
                            </div>
    
                        </div>
                </div>
            </div>
        </div> 
        </div>
    </section>
<!-- FIN SECCIÓN CLIENTES -->
    
<!-- SECCION DE REPORTES -->
    <section class=" reportes tables-page-section" ="service" id="reportes" >
            <div class="content content-reportes"><!-- INICIO-CONTENT -->
                <div class="section_title text-center">
                    <h2>Reportes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. <br>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                </div>
            <div class="row" data-aos="flip-right" data-aos-duration="1000">
                <div class="col-md-8 col-lg-7">
                    <div class="select">
                        <select name="slct" id="slct">
                            <option selected disabled>Año</option>
                            <option value="1">2019</option>
                            <option value="2">2018</option>
                            <option value="3">2017</option>
                        </select>
                    </div>
            
        <!-- tabla estadistica -->
            
                
                    <h3>Estadísticas</h3>
                    <div class="table-responsive estadistica">
                        <table class="table">
                            <thead>
                                <th>Frecuencia</th>
                                <th>Archivo</th>
                            </thead>
                            <tr>
                                <td>Mensual</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            
                        </table>
                    </div>
                 
            
        <!-- fin tabla estadistica -->

        <!-- tabla fishing report -->
            
                
                    <h3>Fishing Report</h3>
                    <div class="table-responsive fishing-report">
                        <table class="table">
                            <thead>
                                <th>Temporada</th>
                                <th>Regiones</th>
                                <th>Frecuencia</th>
                                <th>Archivo</th>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Norte/Centro</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sur</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Norte/Centro</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sur</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                        </table>
                    </div>
                
            
        <!-- fin tabla estadistica -->

        <!-- tabla fishing reportes -->
        
           
                    <h3>Reportes</h3>
                    <div class="table-responsive fishing-report">
                        <table class="table">
                            <thead>
                                <th>Temporada</th>
                                <th>Regiones</th>
                                <th>Frecuencia</th>
                                <th>Archivo</th>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Norte/Centro</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sur</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Norte/Centro</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sur</td>
                                <td>Quincenal</td>
                                <td>Descargar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Semanal</td>
                                <td>Descargar</td>
                            </tr>
                        </table>
                    </div>
            </div>

            <div class="col">
                <figure>
                    <img src="img/img_reportes.png" alt="">
                </figure>
            </div>
        </div>
        <!-- fin tabla reportes -->
          </div> <!-- FIN-CONTENT -->
    </section>
<!-- FIN REPORTES -->

<!-- Contacto -->
    <section class="contacto" id="contacto">
        <div class="content"><!-- INICIO-CONTENT -->
        <div class="row">
            <div class="col-12">
                <h2>Contacto</h2>
            </div>
            <div class="col-12 col-lg-6 order-lg-2">
                <!-- <h3>Mapa</h3> -->
                <div class="content-mapa">
                    <div id="map" class="map"></div>
                </div>
                <div class="content-info">
                    <p class="direccion" >Av. Alfredo Benavides Nº 1579 - Of. 604, San Jorge - Miraflores</p>
                    <p class="telefono">(511) 241 0463</p>
                    <p class="correo">pb@perubroker.com.pe</p>
                    <p class="fax">242 5626</p>
                    <p class="facebook"><a href="#">www.facebook.com/perubroker</a></p>
                </div>
            </div>
        
            <div class="col-12 col-lg-6 order-lg-1">
                <!-- FORMULARIO -->
                <form class="wpcf7-form" action="">
                    <p>
                        <label for="">Nombres *</label>
                        <input type="text">
                    </p>

                    <p>
                        <label for="">Correo / telf *</label>
                        <input type="text">
                    </p>

                    <p>
                        <label for="">Empresa</label>
                        <input type="text">
                    </p>
                    
                    <p>
                        <label for="">Mensaje *</label>
                        <textarea name="" id=""></textarea>
                    </p>
                    <p>
                        <input type="submit" value="Enviar">
                    </p>
                </form>
            </div>
        </div>
        </div><!-- FIN-CONTENT -->
    </section>


<!-- FOOTER -->
    <footer>
        <div class="row">
            <div class="col">
                    <div class="copy">
                        <p>Copyright 2019</p>
                    </div>
                    <div class="create">
                        <p>create by <a href="https://www.facebook.com/cyberzsoft/" target="_blan">CyberzSoft</a></p>
                    </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src='js/swiper.min.js'></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script> -->
    
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>
</html>