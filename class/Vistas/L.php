<?php
namespace Vistas;

class L
{
    public function __toString()
    {
        return "<h2>Estoy en la clase " . __CLASS__ . "</h2>";
    }
}
