<?php

/**load("Liberado! Aguarde..", "verde");
        echo ('<meta http-equiv="refresh" content="3; url=admin2/home.php?s=1">'); */
function load($msg, $class)
{
    echo ('<div class="overlay-texto ') . $class . ('"> <div class="loader-') . $class . ('"></div> ') . $msg . (' </div>');
}
