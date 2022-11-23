<?php
include('conexion.php');
session_start(); 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.html');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RescaPets</title>

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"/>

    <!--=============== REMIX ICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"/>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./home.css"/>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header>
        <a href="#">
            <img id="logo" src="./img/logo.png" alt="logo"/>
        </a>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="../Rescatalos/rescatalos.php">Rescatalos</a></li>
                <li><a href="">Buscá información</a></li>
                <li><a href="">Denunciá</a></li>
				<li>
					<form method="POST">
					<input id="btncerrar" type="submit" value="Cerrar sesión" name="btncerrar"/>
					</form>
				</li>
            </ul>
        </nav>
    </header>
    <!--=============== MAIN ===============-->
    <main>
        <!--=============== HOME ===============-->
        <section id="home" class="bg-home">
            <div class="home center">
                <h1>RESCAPETS</h1>
                <p>"Rescatarlos" es más que una palabra, es nuestro compromiso.</p>
            </div>
        </section>
        <!--=============== STEPS ===============-->
        <section id="steps" class="bg-primary">
            <div class="center">
                <h2>Si encontrás un animal en situación de calle</h2>
                <div class="steps">
                    <div class="steps-card">
                        <i class="ri-hospital-fill"></i>
                        <h6>Fijate si está herido.</h6>
                        <p>Si lo está, podés encontrar tu veterniario más cercano en nuestro mapa interactivo.
                        </p>
                    </div>
                    <div class="steps-card">
                        <i class="ri-camera-3-fill"></i>
                        <h6>Publicá su foto</h6>
                        <p>No te olvides que no todos los animales en la calle fueron abandonados, quizás su familia está buscándolo.
                        </p>
                    </div>
                    <div class="steps-card">
                        <i class="ri-empathize-fill"></i>
                        <h6>Rescatalo</h6>
                        <p>Si tenés la posibilidad de comprometerte no dudes en adoptar, si no, comunicate con tu refugio más cercano, podés verlo yendo a nuestro mapa interactivo.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== FEATURES ===============-->
        <section id="features">
            <div class="features center">
            <!--Imagen de reemplazo-->
            <img class="grid-item-one" src="./media/website.png" alt="website"/>
                <div class="grid-item-two">
                    <h3>Características del sitio RescaPets</h3>
                    <ul>
                        <li><i class="ri-checkbox-multiple-fill"></i>Usá la página desde cualquier lugar</li>
                        <li><i class="ri-checkbox-multiple-fill"></i>Buscá información sobre veterinarios y refugios</li>
                        <li><i class="ri-checkbox-multiple-fill"></i>Ayudá a los animales a tener un hogar</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=============== TEAM ===============-->
        <section id="team">
            <div class="team center">
            <!--Imagen de reemplazo-->
            <img class="grid-item-one" src="./media/team-removebg-preview.png" alt="teamwork"/>
            <div class="grid-iten-two">
                <h3>Sobre el team detrás de RescaPets</h3>
                <ul>
                    <li><i class="ri-checkbox-multiple-fill"></i>Somos un grupo de programadores que consideran a la tecnología como agente de cambio.</li>
                    <li><i class="ri-checkbox-multiple-fill"></i>Buscamos ayudar a la comunidad y proteger los derechos de los animales</li>
                    <li><i class="ri-checkbox-multiple-fill"></i>Nos motiva ser propulsores de generar un impacto social contribuyendo desde nuestros conocimientos informáticos.</li>
                </ul>
            </div>
            </div>
        </section>
        <!--=============== ABOUT ===============-->
        <section class="about bg-primary">
            <div class="about center">
                <h4>Conocé al team detrás de RescaPets</h4>
                <!---Todas las imágenes tienen que ser reemplazadas-->
                <div class="card-container">
                    <div class="card">
                        <div class="upper-section">
                            <div class="image-container">
                                <img class="avatar" src="img/3.jpeg" alt="Karen">
                            </div>
                        </div>
                        <div class="lower-section">
                            <div class="info">
                                <p class="card-name">Karen G.</p>
                                <p class="card-title">Desarrolladora</p>
                                <hr class="card-line">
                                <p class="card-description">
                                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, odit".
                                </p>
                                <div class="social-icons">
                                    <i class="ri-linkedin-box-fill"></i>
                                    <i class="ri-github-fill"></i>
                                    <i class="ri-links-line"></i> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <div class="image-container">
                                <img class="avatar" src="./img/4.jpg" alt="Brian">
                            </div>
                        </div>
                        <div class="lower-section">
                            <div class="info">
                                <p class="card-name">Brian</p>
                                <p class="card-title">Desarrollador</p>
                                <hr class="card-line">
                                <p class="card-description">
                                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, odit". 
                                </p>
                                <div class="social-icons">
                                    <i class="ri-linkedin-box-fill"></i>
                                    <i class="ri-github-fill"></i>
                                    <i class="ri-links-line"></i> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <div class="image-container">
                                <img class="avatar" src="./img/5.jpeg" alt="Paula">
                            </div>
                        </div>
                        <div class="lower-section">
                            <div class="info">
                                <p class="card-name">Paula</p>
                                <p class="card-title">Desarrolladora</p>
                                <hr class="card-line">
                                <p class="card-description">
                                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, odit".
                                </p>
                                <div class="social-icons">
                                    <i class="ri-linkedin-box-fill"></i>
                                    <i class="ri-github-fill"></i>
                                    <i class="ri-links-line"></i>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <div class="image-container">
                                <img class="avatar" src="img/6.jpg" alt="Hernan">
                            </div>
                        </div>
                        <div class="lower-section">
                            <div class="info">
                                <p class="card-name">Hernan</p>
                                <p class="card-title">Desarrollador</p>
                                <hr class="card-line">
                                <p class="card-description">
                                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, odit". 
                                </p>
                                <div class="social-icons">
                                    <i class="ri-linkedin-box-fill"></i>
                                    <i class="ri-github-fill"></i>
                                    <i class="ri-links-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!--HAY QUE MODIFICAR-->
        <!--=============== FAQS ===============-->
        <section class="faqs">
            <div class="head">
                <h3>Preguntas frecuentes</h3>
            </div>
            <div class="faq_body">
                <details>
                    <summary>¿Qué es RescaPets?</summary>
                    <div>
                        <p> RescaPets es un sitio donde podés encontrar información sobre animales en situación de calle, desde veterinarios, refugios hasta qué hacer en caso de maltrato animal.</p>
                    </div>
                </details>
                <details>
                    <summary>¿Cómo funciona?</summary>
                    <div>
                        <p>Solo es necesario que te dirijas hacia Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
                    </div>
                </details>
                <details>
                    <summary>¿Tiene algún costo?</summary>
                    <div>
                        <p>No, el sitio es 100% gratuito.</p>
                    </div>
                </details>
                <details>
                    <summary>¿Es solo para perros?</summary>
                    <div>
                        <p>No, nuestro sitio se propone ayudar a todos los animales, sin distinción de la especie.</p>
                    </div>
                </details>
                <details>
                    <summary>¿Es para todos los países?</summary>
                    <div>
                        <p>Actualmente está segmentado solo para Argentina, sin embargo, consideramos expandirlo en el futuro.</p>
                    </div>
                </details>
                <details>
                    <summary>¿Cómo puedo aportar?</summary>
                    <div>
                        <p>Difundiendo y utiliando el sitio.</p>
                    </div>
                </details>
            </div>
        </section>
        <!--¿Agrego un formulario de contacto?-->
    </main>
    <!--=============== FOOTER ===============-->
   <footer>
        <div class="center">
            <p>&copy; Todos los derechos reservados</p>
        </div>
   </footer>
   <!--ACÁ IRÍA EL SCRIPT A JS-->

   <!--Lista de cuestiones a modificar: 
        1)Logo, el tamaño y ubicación no cuadran. Al removerle el fondo se removió también parte de su contenido
        2)Cards de la sección "steps", el borde tiene diferentes tamaños por su contenido
        3)Reemplazar a las imágenes correspondientes de las secciones "features" y "team", a su vez chequear los textos de las mismas.
        4)Reemplazar imágenes por las correspondientes en la sección "About" y agregar los links que correspondan según las redes sociales
        5)Modificar título de la sección "faqs" ya que queda discordante con el resto. Agregar el texto correspondiente a la pregunta "¿Cómo funciona?"-->
</body>
</html>