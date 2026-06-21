// src/Ejercicio1/Lobo.php
<?php
class Lobo extends Canido {
    public function __construct() {
        parent::__construct("Aullido", "Carne de presas", "Bosques y montañas", "Canis lupus");
    }

    // Método extra considerado necesario
    public function cazarEnManada(): string {
        return "El lobo se organiza con su manada para acechar.";
    }
}