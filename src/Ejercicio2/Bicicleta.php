// src/Ejercicio2/Bicicleta.php
<?php
class Bicicleta extends Vehiculo {
    public function especificarMaterial(): string {
        return "La bicicleta de marca {$this->marca} está hecha de Aluminio ligero.";
    }
}