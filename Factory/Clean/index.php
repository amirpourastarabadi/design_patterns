<?php

require __DIR__ . '/Concretes/Factory.php';
require __DIR__ . '/Enemies/EnemyFactory.php';
require __DIR__ . '/Enemies/Enemy.php';
require __DIR__ . '/Enemies/AbstractEnemy.php';
require __DIR__ . '/Enemies/Alien.php';
require __DIR__ . '/Enemies/Man.php';
require __DIR__ . '/Enemies/Animal.php';
require __DIR__ . '/Tools/ToolFactory.php';
require __DIR__ . '/Tools/AbstractTool.php';
require __DIR__ . '/Tools/Knife.php';
require __DIR__ . '/Tools/Gun.php';
require __DIR__ . '/Soldiers/Soldier.php';
require __DIR__ . '/Soldiers/SoldierFactory.php';
require __DIR__ . '/Soldiers/AbstractSoldier.php';
require __DIR__ . '/Soldiers/Infanty.php';
require __DIR__ . '/Soldiers/SpecialForce.php';

// make enemies
deliminator("set enemies team");
$enemies = [];
for ($i = 0; $i < 2; $i++) {

    select_tool:
    $tool = strtolower(readline('Make Tool: (1. Knife, 2. Gun, 3. NUN)'));
    try {
        $tool = ToolFactory::make($tool);
    } catch (InvalidArgumentException $e) {
        goto select_tool;
    }


    select_enemy:
    $enemy = strtolower(readline('Make Enemy: (1. Alien, 2. Man, 3. Animal)'));
    try {
        $enemies[] = EnemyFactory::make($enemy, $tool);
    } catch (InvalidArgumentException $e) {
        goto select_enemy;
    }
}


// make soldeirs
deliminator("set soldeirs team");
$soldeirs = [];
for ($i = 0; $i < 2; $i++) {

    select_soldeir_tool:
    $tool = strtolower(readline('Make Tool: (1. Knife, 2. Gun)'));
    try {
        $tool = ToolFactory::make($tool);
    } catch (InvalidArgumentException $e) {
        goto select_soldeir_tool;
    }

    select_soldeir:
    $solder = strtolower(readline('Make Solder: (1. Infanty, 2. SpecialForce)'));
    try {
        $soldeirs[] = SoldierFactory::make($solder, $tool);
    } catch (InvalidArgumentException $e) {
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
