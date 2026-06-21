<?php
declare(strict_types=1);

// =========================================================================
// 1. CARGA DE ARCHIVOS (Imports)
// =========================================================================

// --- Archivos Ejercicio 1 ---
require_once __DIR__ . '/Ejercicio1/Animal.php';
require_once __DIR__ . '/Ejercicio1/Canido.php';
require_once __DIR__ . '/Ejercicio1/Felino.php';
require_once __DIR__ . '/Ejercicio1/Perro.php';
require_once __DIR__ . '/Ejercicio1/Lobo.php';
require_once __DIR__ . '/Ejercicio1/Gato.php';
require_once __DIR__ . '/Ejercicio1/Leon.php';

// --- Archivos Ejercicio 2 ---
require_once __DIR__ . '/Ejercicio2/Interfaces/Actor.php';
require_once __DIR__ . '/Ejercicio2/Interfaces/ObjetoInerte.php';
require_once __DIR__ . '/Ejercicio2/Persona.php';
require_once __DIR__ . '/Ejercicio2/Profesor.php';
require_once __DIR__ . '/Ejercicio2/Estudiante.php';
require_once __DIR__ . '/Ejercicio2/Vehiculo.php';
require_once __DIR__ . '/Ejercicio2/Coche.php';
require_once __DIR__ . '/Ejercicio2/Bicicleta.php';


// =========================================================================
// 2. PRUEBAS EN CONSOLA - EJERCICIO 1 (Reino Animal)
// =========================================================================
echo "=== EJERCICIO 1: REINO ANIMAL ===" . PHP_EOL;

$animales = [
    new Perro(),
    new Lobo(),
    new Gato(),
    new León()
];

foreach ($animales as $animal) {
    echo "Animal: " . get_class($animal) . PHP_EOL;
    echo " - Nombre Científico: " . $animal->getNombreCientífico() . PHP_EOL;
    echo " - Sonido característico: " . $animal->getSonido() . PHP_EOL;
    echo " - Alimentación: " . $animal->getAlimentos() . PHP_EOL;
    echo " - Hábitat nativo: " . $animal->getHábitat() . PHP_EOL;
    
    // Métodos únicos individuales
    if ($animal instanceof Perro) echo " - Comportamiento: " . $animal->moverCola() . PHP_EOL;
    if ($animal instanceof Lobo)  echo " - Comportamiento: " . $animal->cazarEnManada() . PHP_EOL;
    if ($animal instanceof Gato)  echo " - Comportamiento: " . $animal->ronronear() . PHP_EOL;
    if ($animal instanceof León)  echo " - Comportamiento: " . $animal->liderarManada() . PHP_EOL;
    
    echo "------------------------------------------------" . PHP_EOL;
}

echo PHP_EOL; // Espacio de separación en consola


// =========================================================================
// 3. PRUEBAS EN CONSOLA - EJERCICIO 2 (Actores y Objetos)
// =========================================================================
echo "=== EJERCICIO 2: ACTORES Y OBJETOS ===" . PHP_EOL;

$profe = new Profesor("Carlos", "Programación");
$alumno = new Estudiante("Brayan", "Ingeniería de Sistemas");

$auto = new Coche("Toyota");
$bici = new Bicicleta("Trek");

echo $profe->interpretarRol() . PHP_EOL;
echo $alumno->interpretarRol() . PHP_EOL;
echo "-------------------------------------------" . PHP_EOL;
echo $auto->especificarMaterial() . PHP_EOL;
echo $bici->especificarMaterial() . PHP_EOL;