// src/Ejercicio1/León.php
<?php
class León extends Felino {
    public function __construct() {
        parent::__construct("Rugido", "Grandes mamíferos", "Sabana africana", "Panthera leo");
    }

    // Método extra considerado necesario
    public function liderarManada(): string {
        return "El león protege activamente su territorio en la sabana.";
    }
}