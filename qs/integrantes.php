<?php
date_default_timezone_set('America/Bogota');

class db{
    	public $db;
    
    function get_users($tipo){
        $result="";
        switch ($tipo) {
            case "investigadores":    
                $result.="'"."Wilson Adarme Jaimes"."',";
                $result.="'"."Luis Gerardo Astaiza Amado"."',";
                $result.="'"."Juan Pablo Castrellon Torres"."',";
                $result.="'"."John Willmer Escobar Velásquez"."',";
                $result.="'"."Diego Fernando Hernández Losada"."',";
                $result.="'"."Sonia Cecilia Mangones Matos"."',";
                $result.="'"."Alberto Martínez"."',";
                $result.="'"."Carlos Osorio Ramirez"."',";
                $result.="'"."Leonardo Arturo Ronderos Lobo"."',";
                $result.="'"."Hugo Felipe Salazar Sanabria"."',";
                $result.="'"."Carlos Eduardo Sanchez Diaz"."',";
                $result.="'"."Jairo Humberto Torres Acosta"."',";
                $result.="'"."Juan Carlos Torres Pardo"."',";
                $result.="'"."Jorge Luis García Alcaraz"."',";
                $result.="'"."Jesus Gonzalez Feliu"."',";
                $result.="'"."Gustavo Gatica"."',";
                $result.="'"."José Holguín Veras"."',";
                break;
            case "doctorado":
                $result.="'"."Delio Alexander Balcázar Camacho"."',";
                $result.="'"."Iván Darío Cárdenas Barbosa"."',";
                $result.="'"."Oscar Palacio Leon"."',";
                $result.="'"."Laura Vanessa Palacios Arguello"."',";
                $result.="'"."Oscar Alexander Rincón Guevara"."',";
                $result.="'"."Egdda Patricia Vanegas Escamilla"."',";
                $result.="'"."Frank Alexander Ballesteros Riveros"."',";
                $result.="'"."Javier Arturo Orjuela Castro"."',";
                break;
            case "maestria":
                $result.="'"."Catherine Ballesteros Gómez"."',";
                $result.="'"."Juan Pablo Cruz Casteblanco"."',";
                $result.="'"."Julian Felipe Latorre Ochoa"."',";
                $result.="'"."David Felipe Medina Mayorga"."',";
                $result.="'"."Francy Tatiana Moreno Duarte"."',";
                $result.="'"."Jairo Enrique Parra Herrera"."',";
                $result.="'"."Juan Camilo Romero Arévalo"."',";
                $result.="'"."Nataly Sánchez Gómez"."',";
                $result.="'"."Andrés Enrique Herrera"."',";
                $result.="'"."Jessica Paola Hernandez Lastre"."',";
                break;
            case "apoyo":
                $result.="'"."Luis Ernesto Calderón Luna"."',";
                $result.="'"."Mateo Pachón Rincón"."',";
                $result.="'"."Victor Alfonso Quitiaquez Quitiaquez"."',";
                $result.="'"."Luisa Fernanda Rojas"."',";
                $result.="'"."Jose Sebastian Talero"."',";
                $result.="'"."Adrina Catalina Gutierrez Gómez"."',";
                break;
            }
        return $result;
    }
    function get_notes($cnt){
        $result="";
        for ($i=0;$i<$cnt;$i++){
        $result.="'".'<div id="container"><div id="floated_rigth">'."'+".'imagenes['.$i.']+'."'".'</div>'."'+".'textos['.$i.']+'."'".'</div>'."',";
        }
        return $result;
    }
}

?>