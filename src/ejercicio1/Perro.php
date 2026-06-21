// src/Ejercicio1/Perro.php
<?php
class Perro extends Canido {
    public function __construct() {
        parent::__construct("Ladrido", "Croquetas y carne", "Doméstico", "Canis lupus familiaris");
    }

    // Método extra considerado necesario para diferenciarlo del lobo
    public function moverCola(): string {
        return "El perro menea la cola alegremente.";
    }
}