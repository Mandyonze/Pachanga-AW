<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Template Web Applications 2017</title>
</head>

<body>
<div class="container">
    <!-- The justified navigation menu is meant for single line per list item.
     Multiple lines will require custom code not provided by Bootstrap. -->
    <?php require_once('layout/header.php'); ?>
    <section>
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>Wellcome My Web Projects!!</h1>
            <p class="lead">This is the subject of web applications and in this template you can find a simple example of how to apply MVC in your web project.</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Come on!!</a></p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-4">
                <h2>Model</h2>
                <p class="text-danger">Representa la información con la cual el sistema opera, por lo tanto gestiona todos los accesos a dicha información: CRUD (Create/Read/Update/Delete) consultas como actualizaciones, implementando también los privilegios de acceso que se hayan descrito en las especificaciones de la aplicación (lógica de negocio). Envía a la 'vista' aquella parte de la información que en cada momento se le solicita para que sea mostrada (típicamente a un usuario). Las peticiones de acceso o manipulación de información llegan al 'modelo' a través del 'controlador'.</p>
                <p> Ficheros de la plantilla:
                    <ul>
                        <li><span class="text-info">entityBase.php:</span> Operaciones básica y comunes que implican acceso a base de datos.</li>
                        <li><span class="text-info">post.php:</span> entidades u objetos que representarán cada entidad de vuestro modelo de datos.</li>
                        <li><span class="text-info">helperView.php:</span> Función que permitirá construir las url dentro de las vistas.</li>
                    </ul>
                </p>
                <p><a class="btn btn-primary" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>View</h2>
                <p>Presenta el 'modelo' (información y lógica de negocio) en un formato adecuado para interactuar (usualmente la interfaz de usuario) por tanto requiere de dicho 'modelo' la información que debe representar como salida.</p>
                <p> Ficheros de la plantilla:
                <ul>
                    <li><span class="text-info">views/layout/library.php:</span> Todos las librerias a utilizar en vuestro proyecto.</li>
                    <li><span class="text-info">views/layout/header.php:</span> La sección "header" de vuestro sitio. Será común para todas las páginas que existan.</li>
                    <li><span class="text-info">views/layout/footer.php:</span> La sección "footer" de vuestro sitio. Será común para todas las páginas que existan.</li>
                    <li><span class="text-info">views/home.php:</span> Mostrará la información basica de bienvenida del sitio web.</li>
                    <li><span class="text-info">views/error.php:</span> Será la página web de error del sitio web.</li>
                    <li><span class="text-info">views/indexPost.php:</span> Mostrar todos los post (la lista de posts por ejemplo) almacenados del sitio web.</li>
                    <li><span class="text-info">views/showPost.php:</span> Mostrar el detalle de un post concreto.</li>
                </ul>
                </p>
                <p><a class="btn btn-primary" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Controller</h2>
                <p>Responde a eventos (usualmente acciones del usuario) e invoca peticiones al 'modelo' cuando se hace alguna solicitud sobre la información (por ejemplo, editar un documento o un registro en una base de datos). También puede enviar comandos a su 'vista' asociada si se solicita un cambio en la forma en que se presenta el 'modelo' (por ejemplo, desplazamiento o scroll por un documento o por los diferentes registros de una base de datos), por tanto se podría decir que el 'controlador' hace de intermediario entre la 'vista' y el 'modelo' (véase Middleware).</p>
                <p> Ficheros de la plantilla:
                <ul>
                    <li><span class="text-info">controllers/baseController.php:</span> Funcionalidades generales de los controladores.</li>
                    <li><span class="text-info">controllers/postController.php:</span> Controlador para la Entidad Post.</li>
                    <li><span class="text-info">controllers/viewController.php:</span> Controlador para la Entidad View, acciones generales.</li>
                    <li><span class="text-info">controllers/function.php:</span> Funciones generales para la aplicación.</li>
                </ul>
                </p>
                <p><a class="btn btn-primary" href="#" role="button">Ver detalles &raquo;</a></p>
            </div>
        </div>
    </section>
    <!-- Site footer -->
    <?php require_once('layout/footer.php'); ?>

</div>
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

