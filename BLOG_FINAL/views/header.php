<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE)
{
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
    ?>

    <div class="navbar-fixed"/>
    <nav>
        <div class="nav-wrapper pink">
            <a href="#" class="brand-logo right">Femenine with moni</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="?menu=home">Inicio</a></li>
                <li><a href="?menu=logout">Logout</a></li>
                <li><a href="?menu=productos">Productos</a></li>
                <li><a href="?menu=alumnos">Alumnos</a></li>
                <li><a href="?menu=acercade">Acerca de ..</a></li>
                <li><a href="?menu=contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
    </div>

<?php } else {
    ?>
<!-- Navegación Header -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper pink">
            <a href="#" class="brand-logo right">Femenine with moni</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="?menu=home">Inicio</a></li>
                <li><a href="?menu=login">Login</a></li>
                <!---<li><a href="?menu=productos">Productos</a></li>--->
               <!--- <li><a href="?menu=alumnos">Alumnos</a></li>--->
                <li><a href="?menu=acercade">Acerca de ..</a></li>
                <li><a href="?menu=contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
</div>
<?php } ?>
