<?php
namespace Vistas;

class J
{
    public function __toString()
    {
        return "<h2>Estoy en la clase " . __CLASS__ . "</h2>";
    }
}
