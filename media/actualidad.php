<!-- Insertamos barra nav -->
<?php
require_once("../php/nav2.php");

echo "
<body>
    <section>
        <div class='container'>
            <div class='row mb-5'>
                <div class='col-md-8 mx-auto text-center'>
                    <h6 class='text-primary'>Actualidad</h6>
                    <h1>WhatsApp de pago, así será la nueva opción para negocios </h1>
                    <p>
                        Se trata de un plan de suscripción que ofrece más funcionalidades.
                        Será opcional y exclusivo para WhatsApp Business
                    </p>
                </div>
            </div>

            <div class='col-md-8 mx-auto text-center'>
                <img src='../img/imgblog/wb.jpeg' alt='' style='width:75%; '><br>
                <div style=' text-align: justify; text-justify: inter-word; padding-left: 1rem; padding-right: 1rem;'>
                    <h6 class='text-primary '>Natalia Martínez</h6>
                    <p>27/05/2022</p>
                    <p>La app de mensajería WhatsApp estaría trabajando en un plan de suscripción exclusivo para su versión de empresas, WhatsApp Business, con el que pretenden añadir nuevas funciones como la habilidad de vincular hasta 10 dispositivos en una misma cuenta.</p>
                    <p>Es obvio, que las necesidades que tiene un negocio a la hora de comunicarse con sus clientes y proveedores son muy distintas a las que tiene un usuario de a pie y el uso que hace de WhatsApp en su día a día. Por eso la compañía lanzó WhatsApp Business en 2018 para ofrecer a las empresas una plataforma específica para ellos. </p>
                    <p>Con el objetivo de ofrecer la mejor versión posible, WhatsApp está constantemente añadiendo nuevas funciones y herramientas, y el equipo de WABetaInfo acaba de encontrar la última en la que está trabajando la compañía propiedad de Meta. </p>
                </div>
            </div>
        </div>

    </section>




    <div class='container'>
        <hr>
        <div class='col-md-8 mx-auto text-center'>";


// include('../php/comentarios/loginform.php');

include_once("../php/comentarios/form.php");

require "../php/comentarios/zonacomentarios.php";

// include_once("../php/comentarios/cerrarSesion.php");
echo "
        </div>
    </div>";



require_once("../php/footer2.php");
