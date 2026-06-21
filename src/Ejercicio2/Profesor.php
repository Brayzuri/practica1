// src/Ejercicio2/Profesor.php
<?php
class Profesor extends Persona {
    private string $materia;

    public function __construct(string $nombre, string $materia) {
        parent::__construct($nombre);
        $this->materia = $materia;
    }

    public function interpretarRol(): string {
        return "El profesor {$this->nombre} está dictando la clase de {$this->materia}.";
    }
}