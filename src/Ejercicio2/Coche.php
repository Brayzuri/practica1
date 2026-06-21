// src/Ejercicio2/Coche.php
<?php
class Coche extends Vehiculo {
    public function especificarMaterial(): string {
        return "El coche de marca {$this->marca} está hecho principalmente de Acero y Plástico.";
    }
}