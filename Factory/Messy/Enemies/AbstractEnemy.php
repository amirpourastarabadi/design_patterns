<?php

class AbstractEnemy implements Enemy
{
    protected static int $numberOfEnemies = 0;

    protected array $tools = [];

    protected AbstractTool $activeTool;

    protected string $name;

    public function __construct(AbstractTool $tool = null)
    {
        self::$numberOfEnemies += 1;
        $this->setEnemyName();
        $this->addTool($tool);
        $this->setActiveTool();
    }

    public function makeDamage(Soldier $soldier)
    {
        echo $this->name . ' made -' . $this->activeTool->getPower() . ' damage to ' . $soldier->getName() . PHP_EOL;
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

    protected function setEnemyName()
    {
        $this->name = basename(static::class) . " " . self::$numberOfEnemies;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
