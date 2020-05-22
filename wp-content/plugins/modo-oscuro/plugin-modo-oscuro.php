<?php 

//Plugin name: Modo Oscuro
//Description: Activa el modo oscuro de tu tema
//version: 1.0
//Author: Cristian Soncco
//Author Uri: https://github.com/CristianSoncco

function estilos_plugin(){
    $estilos_url = plugin_dir_url(__FILE__);


    wp_enqueue_style( 'modo_oscuro', $estilos_url."/assets/css/estilo.css", '', '1.0','all');
}




add_action('wp_enqueue_scripts','estilos_plugin');