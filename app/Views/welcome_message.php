<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Conversor CFDI!</title>
        <meta name="description" content="Pequeño y poderoso conversor de CFDI XML a PDF hecho en CodeIgnter">
        <meta name="keywords" content="CFDI, CFDI 4.0, CFDI 3.3, Representación Impresa, CodeIgniter, Factura Electrónica"/>
          <script data-ad-client="ca-pub-1094660604181103" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

        <!-- STYLES -->

        <style {csp-style-nonce}>
            * {
                transition: background-color 300ms ease, color 300ms ease;
            }
            *:focus {
                background-color: rgba(221, 72, 20, .2);
                outline: none;
            }
            html, body {
                color: rgba(33, 37, 41, 1);
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
                font-size: 16px;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: optimizeLegibility;
            }
            header {
                background-color: rgba(247, 248, 249, 1);
                padding: .4rem 0 0;
            }
            .menu {
                padding: .4rem 2rem;
            }
            header ul {
                border-bottom: 1px solid rgba(242, 242, 242, 1);
                list-style-type: none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                text-align: right;
            }
            header li {
                display: inline-block;
            }
            header li a {
                border-radius: 5px;
                color: rgba(0, 0, 0, .5);
                display: block;
                height: 44px;
                text-decoration: none;
            }
            header li.menu-item a {
                border-radius: 5px;
                margin: 5px 0;
                height: 38px;
                line-height: 36px;
                padding: .4rem .65rem;
                text-align: center;
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .2);
                color: rgba(221, 72, 20, 1);
            }
            header .logo {
                float: left;
                height: 44px;
                padding: .4rem .5rem;
            }
            header .menu-toggle {
                display: none;
                float: right;
                font-size: 2rem;
                font-weight: bold;
            }
            header .menu-toggle button {
                background-color: rgba(221, 72, 20, .6);
                border: none;
                border-radius: 3px;
                color: rgba(255, 255, 255, 1);
                cursor: pointer;
                font: inherit;
                font-size: 1.3rem;
                height: 36px;
                padding: 0;
                margin: 11px 0;
                overflow: visible;
                width: 40px;
            }
            header .menu-toggle button:hover,
            header .menu-toggle button:focus {
                background-color: rgba(221, 72, 20, .8);
                color: rgba(255, 255, 255, .8);
            }
            header .heroe {
                margin: 0 auto;
                max-width: 1100px;
                padding: 1rem 1.75rem 1.75rem 1.75rem;
            }
            header .heroe h1 {
                font-size: 2.5rem;
                font-weight: 500;
            }
            header .heroe h2 {
                font-size: 1.5rem;
                font-weight: 300;
            }
            section {
                margin: 0 auto;
                max-width: 1100px;
                padding: 2.5rem 1.75rem 3.5rem 1.75rem;
            }
            section h1 {
                margin-bottom: 2.5rem;
            }
            section h2 {
                font-size: 120%;
                line-height: 2.5rem;
                padding-top: 1.5rem;
            }
            section pre {
                background-color: rgba(247, 248, 249, 1);
                border: 1px solid rgba(242, 242, 242, 1);
                display: block;
                font-size: .9rem;
                margin: 2rem 0;
                padding: 1rem 1.5rem;
                white-space: pre-wrap;
                word-break: break-all;
            }
            section code {
                display: block;
            }
            section a {
                color: rgba(221, 72, 20, 1);
            }
            section svg {
                margin-bottom: -5px;
                margin-right: 5px;
                width: 25px;
            }
            .further {
                background-color: rgba(247, 248, 249, 1);
                border-bottom: 1px solid rgba(242, 242, 242, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
            }
            .further h2:first-of-type {
                padding-top: 0;
            }
            footer {
                background-color: rgba(221, 72, 20, .8);
                text-align: center;
            }
            footer .environment {
                color: rgba(255, 255, 255, 1);
                padding: 2rem 1.75rem;
            }
            footer .copyrights {
                background-color: rgba(62, 62, 62, 1);
                color: rgba(200, 200, 200, 1);
                padding: .25rem 1.75rem;
            }
            @media (max-width: 629px) {
                header ul {
                    padding: 0;
                }
                header .menu-toggle {
                    padding: 0 1rem;
                }
                header .menu-item {
                    background-color: rgba(244, 245, 246, 1);
                    border-top: 1px solid rgba(242, 242, 242, 1);
                    margin: 0 15px;
                    width: calc(100% - 30px);
                }
                header .menu-toggle {
                    display: block;
                }
                header .hidden {
                    display: none;
                }
                header li.menu-item a {
                    background-color: rgba(221, 72, 20, .1);
                }
                header li.menu-item a:hover,
                header li.menu-item a:focus {
                    background-color: rgba(221, 72, 20, .7);
                    color: rgba(255, 255, 255, .8);
                }
            }
        </style>
    </head>
    <body>

        <!-- HEADER: MENU + HEROE SECTION -->
        <header>

            <div class="menu">
                <ul>
                    <li class="logo">
                        <a href="https://cesarsystems.com.mx/" target="_blank">
                            <img src="<?php echo base_url();?>/logo.png"
                                 aria-label="Visita mi pagina oficial para mas programas y utilidades!"/></img>
                        </a>
                    </li>
                    <li class="menu-toggle">
                        <button onclick="toggleMenu();">&#9776;</button>
                    </li>
                    <li class="menu-item hidden"><a href="#">Inicio</a></li>
                    <li class="menu-item hidden"><a href="https://cesarsystems.com.mx/" target="_blank">Descargas</a>
                    </li>
                    <li class="menu-item hidden"><a href="https://www.youtube.com/c/rasec555" target="_blank">Comunidad</a></li>
                    <li class="menu-item hidden"><a
                            href="https://patreon.com/user?u=74078772&utm_medium=clipboard_copy&utm_source=copyLink&utm_campaign=creatorshare_creator" target="_blank">Patrocinar</a>
                    </li>
                </ul>
            </div>

            <div class="heroe">

                <h1>Bienvenido a Conversor XML A PDF V2</h1>

                <h2>Un simple software para convertir los CFDI XML a PDF</h2>

            </div>

        </header>

        <!-- CONTENT -->

        <section>

            <h1>Acerca de este programa</h1>

            <p>Este programa toma los archivos XML de la factura 3.3 o 4.0 para convertirlos a una representación generica impresa de un Comprobante Fiscal Digital</p>

            <p>Para convertir el XML a PDF puede arrastrar el archivo XML en el Boton llamado "Seleccionar archivo" </p>

            <p>En caso de que no salga el PDF asegurate de no tener bloqueado el popup o desbloquealo para esta pagina ya que el pdf saldra en el popup" </p>



            <form method="post" action="<?php echo base_url('FileUpload/upload'); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Seleccione el archivo XML </label>
                    <input type="file" name="file" id="file"  accept=".xml" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Generar PDF</button>
                </div>
            </form>

        </section>

        <div class="further">

            <section>

                <h1>¡Ir por más!</h1>

                <h2>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><rect x='32' y='96' width='64' height='368' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><line x1='112' y1='224' x2='240' y2='224' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='112' y1='400' x2='240' y2='400' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><rect x='112' y='160' width='128' height='304' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><rect x='256' y='48' width='96' height='416' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><path d='M422.46,96.11l-40.4,4.25c-11.12,1.17-19.18,11.57-17.93,23.1l34.92,321.59c1.26,11.53,11.37,20,22.49,18.84l40.4-4.25c11.12-1.17,19.18-11.57,17.93-23.1L445,115C443.69,103.42,433.58,94.94,422.46,96.11Z' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/></svg>
                    Descargas y tutoriales
                </h2>

                <p>Puedes encontrar mas aplicativos, manuales y tutoriales en la siguiente pagina <a href="https://cesarsystems.com.mx/"
                                                target="_blank">Pagina Principal</a> !</p>

                <h2>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg>
                    Grupos
                </h2>

                <p>Puede seguirnos en los siguientes grupos y redes sociales como <a href="https://www.youtube.com/c/rasec555"
                                      target="_blank">Canal de youtube </a>, 
                                      
                                      <a href="https://t.me/CesarSystems"
                                      target="_blank">Canal de Telegram</a> ,
                                      
                                      <a href="https://twitter.com/JulioLeyvaR"
                                      target="_blank">Twitter</a> ,
                                      
                                       <a href="https://odysee.com/@JulioCesarLeyvaRodriguez:9"
                                      target="_blank">Odysee</a> y
                                      
                                      <a href="https://www.facebook.com/rasec555/"
                                      target="_blank">Facebook</a> 
                
                
                </p>

                <h2>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><line x1='176' y1='48' x2='336' y2='48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><line x1='118' y1='304' x2='394' y2='304' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M208,48v93.48a64.09,64.09,0,0,1-9.88,34.18L73.21,373.49C48.4,412.78,76.63,464,123.08,464H388.92c46.45,0,74.68-51.22,49.87-90.51L313.87,175.66A64.09,64.09,0,0,1,304,141.48V48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg>
                    Patrocinar
                </h2>

                <p>Puedes apoyar nuestros proyectos en Patreon y obtendras acceso exclusivo a los fuentes mas recientes
                    <a href="https://patreon.com/user?u=74078772&utm_medium=clipboard_copy&utm_source=copyLink&utm_campaign=creatorshare_creator" target="_blank">
                        Unete</a> </p>

            </section>

        </div>

        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

        <footer>
            <div class="environment">

                <p>Tiempo de Renderizado {elapsed_time} seconds</p>

            

            </div>

            <div class="copyrights">

                <p>&copy; <?= date('Y') ?> Conversor XML a PDF es un proyecto de código abierto lanzado con la licencia MIT
                    open source licence.</p>

            </div>

        </footer>

        <!-- SCRIPTS -->

        <script>
            function toggleMenu() {
                var menuItems = document.getElementsByClassName('menu-item');
                for (var i = 0; i < menuItems.length; i++) {
                    var menuItem = menuItems[i];
                    menuItem.classList.toggle("hidden");
                }
            }
        </script>

        <!-- -->

    </body>
</html>
