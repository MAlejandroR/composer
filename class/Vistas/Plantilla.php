<?php

namespace Vistas;

class Plantilla
{
    /**
     * @param array $campos
     * @param Persona[] $personas
     * @return string
     */
    public static function getTableHtml (array $campos , array $personas): string{

        $tabla_html = "<table border='1'>";
        $tabla_html .= "<tr>";
        foreach ($campos as $campo)
            $tabla_html .= "<td>$campo</td>";
        $tabla_html .= "</tr>";
        foreach ($personas as $persona){
            $tabla_html .= "<tr>";
            $tabla_html .= "<td>".$persona->getNombre()."</td>";
            $tabla_html .= "<td>".$persona->getEmail()."</td>";
            $tabla_html .= "<td>".$persona->getEdad()."</td>";
            $tabla_html .= "</tr>";
        }

        $tabla_html.="</table>";
        return $tabla_html;

    }

}