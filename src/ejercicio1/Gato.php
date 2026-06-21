// src/Ejercicio1/Gato.php
<?php
class Gato extends Felino {
    public function __construct() {
        parent::__construct("Maullido", "Pescado y alimento seco", "Doméstico", "Felis catus");
    }

    // Método extra considerado necesario
    public function ronronear(): string {
        return "El gato está ronroneando porque está cómodo.";
    }
}