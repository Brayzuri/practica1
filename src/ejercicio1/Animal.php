// src/Ejercicio1/Animal.php
<?php
abstract class Animal {
    protected string $sonido;
    protected string $alimentos;
    protected string $hábitat;
    protected string $nombreCientífico;

    public function __construct(string $sonido, string $alimentos, string $hábitat, string $nombreCientífico) {
        $this->sonido = $sonido;
        $this->alimentos = $alimentos;
        $this->hábitat = $hábitat;
        $this->nombreCientífico = $nombreCientífico;
    }

    public function getNombreCientífico(): string {
        return $this->nombreCientífico;
    }

    public function getSonido(): string {
        return $this->sonido;
    }

    public function getAlimentos(): string {
        return $this->alimentos;
    }

    public function getHábitat(): string {
        return $this->hábitat;
    }
}