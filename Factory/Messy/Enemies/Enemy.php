<?php

interface Enemy
{
    public function makeDamage(Soldier $soldier);

    public function getName():string;
}
