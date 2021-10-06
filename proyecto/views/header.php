<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue darken-4">

            <a href="#" class="brand-logo right"><img src="images/escudocampeche.jpg" alt="" width="290" height="70"  /></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                
                <li><a href="?menu=home">Principal</a></li>
                
                <li><a href="?menu=infomuni">Municipios</a></li>
                
                <li><a href="?menu=productos">Comidas</a></li>
                
                <li><a href="?menu=cultura">La Gente</a></li>
                
                                <li><a href="?menu=alumnos">Alumnos</a></li>

                
                
                <li class ="nav-item"><a class="nav-link" href="?menu=logout">Logout</a></li>
                
                
           
            </ul>
        </div>
    </nav>
</div>

<?php
}else{
  ?>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue darken-4">

            <a href="#" class="brand-logo right"><img src="images/escudocampeche.jpg" alt="" width="290" height="70"  /></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                
                <li><a href="?menu=home">Principal</a></li>
                
                <li><a href="?menu=infomuni">Municipios</a></li>
                
                <li><a href="?menu=productos">Comidas</a></li>
                
                <li><a href="?menu=cultura">La Gente</a></li>
                
                <li><a href="?menu=login">Ingresar</a></li>
                
                
                

            </ul>
        </div>
    </nav>
</div>
<?php
}
?>