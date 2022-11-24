<?php

require __DIR__ . '/Enemies/Enemy.php';
require __DIR__ . '/Enemies/AbstractEnemy.php';
require __DIR__ . '/Enemies/Alien.php';
require __DIR__ . '/Enemies/Man.php';
require __DIR__ . '/Enemies/Animal.php';
require __DIR__ . '/Tools/AbstractTool.php';
require __DIR__ . '/Tools/Knife.php';
require __DIR__ . '/Tools/Gun.php';
require __DIR__ . '/Soldiers/Soldier.php';
require __DIR__ . '/Soldiers/AbstractSoldier.php';
require __DIR__ . '/Soldiers/Infanty.php';
require __DIR__ . '/Soldiers/SpecialForce.php';

// make enemies
deliminator("set enemies team");
$enemies = [];
for ($i = 0; $i < 2; $i++) {

    select_tool:
    $tool = strtolower(readline('Make Tool: (1. Knife, 2. Gun, 3. NUN)'));

    if ($tool === 'knife' || $tool === '1') {
        $tool = new Knife();
    } elseif ($tool === 'gun' || $tool === '2') {
        $tool = new Gun();
    } elseif ($tool === 'nun' || $tool === '3') {
        $tool = null;
    } else {
        echo "Invalid input..." . PHP_EOL;
        goto select_tool;
    }

    select_enemy:
    $enemy = strtolower(readline('Make Enemy: (1. Alien, 2. Man, 3. Animal)'));

    if ($enemy === 'alien' || $enemy === '1') {
        $enemies[] = new Alien($tool);
    } elseif ($enemy === 'man' || $enemy === '2') {
        $enemies[] = new Man($tool);
    } elseif ($enemy === 'animal' || $enemy === '3') {
        if (!is_null($tool)) {
            echo 'Animal does not get tool!!!' . PHP_EOL;
        }
        $enemies[] = new Animal();
    } else {
        echo "Invalid input..." . PHP_EOL;
        goto select_enemy;
    }
}


// make soldeirs
deliminator("set soldeirs team");
$soldeirs = [];
for ($i = 0; $i < 2; $i++) {

    select_soldeir_tool:
    $tool = strtolower(readline('Make Tool: (1. Knife, 2. Gun)'));

    if ($tool === 'knife' || $tool === '1') {
        $tool = new Knife();
    } elseif ($tool === 'gun' || $tool === '2') {
        $tool = new Gun();
    } else {
        echo "Invalid input..." . PHP_EOL;
        goto select_soldeir_tool;
    }

    select_soldeir:
    $solder = strtolower(readline('Make Solder: (1. Infanty, 2. SpecialForce)'));

    if ($solder === 'infanty' || $solder === '1') {
        $soldeirs[] = new Infanty($tool);
    } elseif ($enemy === 'specialforce' || $solder === '2') {
        $soldeirs[] = new SpecialForce($tool);
    } else {
        echo "Invalid input..." . PHP_EOL;
        goto select_soldeir;
    }
}


deliminator("start fight in 3 secondes...");
sleep(3);
for ($i = 0; $i < 5; $i++) {
    $soldeir = $soldeirs[array_rand($soldeirs, 1)];
    $enemy = $enemies[array_rand($enemies, 1)];
    $soldeir->attack($enemy);
    $enemy->makeDamage($soldeir);
}

echo "GAME OVER!" . PHP_EOL;


// helpers

function deliminator(string $message)
{
    echo "**************************************************************" . PHP_EOL;
    echo "**************************************************************" . PHP_EOL;
    echo "## " . strtoupper($message) . PHP_EOL;
    echo "**************************************************************" . PHP_EOL;
    echo "**************************************************************" . PHP_EOL;
}
