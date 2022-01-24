<?php

namespace App\Models;

class Posteo
{
    public $titulo;
    public $subtitulo;
    public $autor="";
    public $fecha="";
    
    public function posteo1(){
        $titulo = ["Billie Ellish"];
        $subtitulo = ["Grammys"];
        $autor = ["Sebastian Smith Castillo"];
        $fecha = ["19 de Septiembre de 2019"];
        return $titulo;
    }
    public function posteo2(){
        $titulo = "NF";
        $subtitulo = "Mejor cancion titulada Oh lord";
        $autor = "Gerardo Antonio Perez Garcia";
        $fecha = "20 de Noviembre de 2018";
    }
    public function posteo3(){
        $titulo = "xxxtentacion muere";
        $subtitulo = "Artista muere baleado por criminales";
        $autor = "Andrea Saltillo Mendez";
        $fecha = "6 de Julio de 2018";
    }
    public function posteo4(){
        $titulo = "Linkin park";
        $subtitulo = "Se suicida vocalista de la banda linkin park por motivos personales";
        $autor = "Pedro Hernandez Castillo";
        $fecha = "20 de Julio de 2019";
    }
}
