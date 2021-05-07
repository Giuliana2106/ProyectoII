<?php

$Usuario=$_POST['name'];
$Password=$_POST['pass'];
$Estado=false;
$cont=0;

foreach($Usuario as $u)
{
    if ($u['name']==$Usuario && $u['pass']==$Password)
    {
        $Estado=true;
        $cont++;
    }
}

if($Estado)
{
    header('location:PáginaWeb.html');
}
else
{
    echo ("Usuario/Contraseña incorrecto");
}
?>