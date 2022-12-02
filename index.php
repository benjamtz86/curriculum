<?php include('config/constantes.php');

$sentenciaexperiencia = $base_de_datos->query("SELECT * FROM puesto");
$consultaexperiencia = $sentenciaexperiencia->fetchAll(PDO::FETCH_OBJ);

$sentenciaescuela = $base_de_datos->query("SELECT * FROM educacion");
$consultaescuela = $sentenciaescuela->fetchAll(PDO::FETCH_OBJ);

$sentenciahabilidades = $base_de_datos->query("SELECT * FROM habilidades");
$consultahabilidades = $sentenciahabilidades->fetchAll(PDO::FETCH_OBJ);

$sentenciaintereses = $base_de_datos->query("SELECT * FROM intereses");
$consultaintereses = $sentenciaintereses->fetchAll(PDO::FETCH_OBJ);

$sentencialogros = $base_de_datos->query("SELECT * FROM logros");
$consultalogros = $sentencialogros->fetchAll(PDO::FETCH_OBJ);

//$sentenciaimagenes = $base_de_datos->query("SELECT * FROM imagenes");
//$consultaimagenes = $sentenciaimagenes->fetchAll(PDO::FETCH_OBJ);

$sentenciadocumentos = $base_de_datos->query("SELECT * FROM documentos");
$consultadocumentos = $sentenciadocumentos->fetchAll(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resumen Benjamin Martinez Bernal</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Benjamin Martinez</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/bmb.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Acerca de Mí</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experiencia</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Educación</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Habilidades</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Intereses</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Logros</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#attachments">Adjuntos</a></li>
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../benjaminmartinezbernal/en/index.html">EN</a></li>  -->
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <img src="assets/img/Logo.png" width=70% style="vertical-align:bottom">
                    <div class="subheading mb-5">
                        Río Verde 11418, Pradera Dorada · Mazatlán, Sinaloa, Mexico. CP 82139 · + 52 (694) 956-2108 ·
                        <a href="mailto:benja.mtz86@gmail.com">benja.mtz86@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Soy un Profesional con una experiencia de más de 10 años de y
                        excelentes dotes para liderar y consolidar profesionales de TI en el sector
                        Industrial. Conocimientos especializados para identificar oportunidades
                        de negocio, optimizar procesos y maximizar la rentabilidad. Capaz de
                        mantener motivado al personal a cargo para sacar lo mejor de cada
                        empleado.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/benjaminmb/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/benjamtz86"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.tiktok.com/@benjaminmb4"><i class="fab fa-tiktok"></i></a>
                        <a class="social-icon" href="https://wa.me/526949562108"><i class="fab fa-whatsapp"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/benja1030"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            
            <section class="resume-section" id="experience">

            <div class="col-xs-12">
            <h2 class="mb-5">Experiencia</h2>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Puesto</th>
					<th>Trabajo</th>
                    <th>Descripcion</th>
					<th>Inicio</th>
                    <th>Fin</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultaexperiencia as $consultaexperiencia2){ ?>
                   
				<tr>
					<td><?php echo $consultaexperiencia2->puesto ?></td>
					<td><?php echo $consultaexperiencia2->empresa ?></td>
                    <td><?php echo $consultaexperiencia2->descripcion ?></td>
                    <td><?php echo $consultaexperiencia2->inicio ?></td>
                    <td><?php echo $consultaexperiencia2->fin ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>


 
                    
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
            <div class="col-xs-12">
            <h2 class="mb-5">Educacion</h2>
                <table class="table table-bordered">
			<thead>
				<tr>
					<th>Escuela</th>
					<th>Carrera</th>
					<th>Inicio</th>
                    <th>Fin</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultaescuela as $consultaescuela){ ?>
				<tr>
					<td><?php echo $consultaescuela->escuela ?></td>
					<td><?php echo $consultaescuela->carrera ?></td>
                    <td><?php echo $consultaescuela->inicio ?></td>
                    <td><?php echo $consultaescuela->fin ?></td>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Habilidades</h2>
                    <div class="subheading mb-3">Lenguajes de programacion y Herramientas</div>
                    <ul class="list-inline dev-icons">

                        <li class="list-inline-item"><img src="assets/icon/linux-original.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/apple-original.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/windows8-original.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/android-original.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/chrome-plain-wordmark.svg" width="50" height="50" style="vertical-align:bottom"></li>

                    </ul>

                    <ul class="list-inline dev-icons">

                        <li class="list-inline-item"><img src="assets/icon/microsoftsqlserver-plain-wordmark.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/mysql-original-wordmark.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/apache-original-wordmark.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/html5-original-wordmark.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/iis.jpg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/php-original.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/sublime.jpg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/ubiquiti.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/ftg.jpg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/invgate.jpg" width="50" height="50" style="vertical-align:bottom"></li>
  
                        <li class="list-inline-item"><img src="assets/icon/kaspersky.png" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/acronis.png" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/Anydesk.png" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/photoshop-plain.svg" width="50" height="50" style="vertical-align:bottom"></li>
                        <li class="list-inline-item"><img src="assets/icon/office.png" width="50" height="50" style="vertical-align:bottom"></li>

                    </ul>
                    <div class="col-xs-12">
            <h2 class="mb-5">Principales Funciones</h2>
                <table class="table table-bordered">
			<thead>
				<tr>
					<th>Funciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultahabilidades as $consultahabilidades){ ?>
				<tr>
					<td><?php echo $consultahabilidades->habilidades ?></td>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
            <div class="col-xs-12">
            <h2 class="mb-5">Intereses</h2>
                <table class="table table-bordered">
			<thead>
				<tr>
					<th>Interes</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultaintereses as $consultaintereses){ ?>
				<tr>
					<td><?php echo $consultaintereses->intereses ?></td>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
            <div class="col-xs-12">
            <h2 class="mb-5">Reconocimientos</h2>
                <table class="table table-bordered">
			<thead>
				<tr>
					<th>Academia</th>
                    <th>Constancia</th>
                    <th>Fecha</th>
                    <th>Folio</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultalogros as $consultalogros){ ?>
				<tr>
					<td><?php echo $consultalogros->institucion ?></td>
                    <td><?php echo $consultalogros->constancia ?></td>
                    <td><?php echo $consultalogros->fecha ?></td>
                    <td><?php echo $consultalogros->folio ?></td>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
                </div>
            </section>
            <!-- Attachments-->
            <section class="resume-section" id="attachments">
                <div class="resume-section-content">
                <div class="col-xs-12">
            <h2 class="mb-5">Documentos</h2>
                <table class="table table-bordered">
			<thead>
				<tr>
					<th>Documentos</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultadocumentos as $consultadocumentos){ ?>
				<tr>
                
					<td><img src="<?php echo SITEURL; ?>assets/files/<?php echo $consultadocumentos->documentos ?>" width=35%></td>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
                </div>
            </section>
        </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    <div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>
</html>
