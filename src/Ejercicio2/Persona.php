// src/Ejercicio2/Persona.php
<?php
abstract class Persona implements Actor {
    protected string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }
}