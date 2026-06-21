// src/Ejercicio2/Vehiculo.php
<?php
abstract class Vehiculo implements ObjetoInerte {
    protected string $marca;

    public function __construct(string $marca) {
        $this->marca = $marca;
    }
}