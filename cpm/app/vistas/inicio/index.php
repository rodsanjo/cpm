
<div id="inicio">
    <div id="busqueda">
        <?php include "form_buscar.php"; ?> 
    </div>
    <p style="text-align:center;float:none;">"El portal inmobiliario"</p>
    
    <div id="acciones">
        <?php
        //echo \core\HTML_Tag::a_boton_onclick("botonAdmin", array("bienes", "form_insertar"), "Insertar un inmueble");
        echo \core\HTML_Tag::a_boton("botonAdmin", array("bienes", "form_insertar"), "insertar un nuevo inmueble", array("title" => "insertar un nuevo inmueble"));
        ?>
    </div>
</div>


