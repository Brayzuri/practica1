// src/Ejercicio2/Estudiante.php
<?php
class Estudiante extends Persona {
    private string $carrera;

    public function __construct(string $nombre, string $carrera) {
        parent::__construct($nombre);
        $this->carrera = $carrera;
    }

    public function interpretarRol(): string {
        return "El estudiante {$this->nombre} está estudiando la carrera de {$this->carrera}.";
    }
}