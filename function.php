<?php

function say_name($var = "bichin")
{
    echo $var;
}

function get_site_title(){ 
    return "RDKSM";
}

function get_class_body($page) {
    return $page;
}

function daytime(){
    date_default_timezone_set('America/Sao_Paulo');
    $h = date('H:i');
    if($h >= '00' && $h < '12:00'){
        echo 'Bom dia';
    }elseif($h >= '12:00' && $h < '18:00'){
        echo 'Boa Tarde';
    }else{
        echo 'Boa Noite';
    }
}







