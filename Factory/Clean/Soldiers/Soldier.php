<?php

interface Soldier
{
    public function attack(Enemy $enemy);

    public function getName(): string;
}
