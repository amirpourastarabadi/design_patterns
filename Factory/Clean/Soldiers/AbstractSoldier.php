<?php

class AbstractSoldier implements Soldier
{
    private static int $numberOfEnemies = 0;

    protected array $tools = [];

    protected AbstractTool $activeTool;

    protected string $name;

    public function __construct(AbstractTool $tool)
    {
        self::$numberOfEnemies += 1;
        $this->setSoldierName();

        $this->addTool($tool);
        $this->setActiveTool();
    }

    public function addTool(AbstractTool $tool)
    {
        $this->tools[] = $tool;
    }

    public function setActiveTool(int $toolIndex = 0)
    {
        if (isset($this->tools[$toolIndex])) {
            $this->activeTool = $this->tools[$toolIndex];
        }
    }


    public function attack(Enemy $enemy)
    {
        echo $this->name . ' attack to ' . $enemy->getName() . ' with ' . get_class($this->activeTool)  . PHP_EOL;
    }


    private function setSoldierName()
    {
        $this->name = basename(static::class) . " " . self::$numberOfEnemies;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
