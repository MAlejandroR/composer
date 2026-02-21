<?php
namespace BaseDatos\Mysql;

class Persona{
    public function __construct(private string $nombre, private string $email, private int $edad){}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setNombre(string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setEmail(string $email): Persona
    {
        $this->email = $email;
        return $this;
    }

    public function setEdad(int $edad): Persona
    {
        $this->edad = $edad;
        return $this;
    }

    public function __toString(): string
    {
        return "<h3>$this->nombre &lt$this->email&gt de $this->edad años</h3>";
        // TODO: Implement __toString() method.
    }




}
