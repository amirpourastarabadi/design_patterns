<?php

class Train implements Vehicle
{
    public function transport(Cargo $cargo)
    {
        echo "I can transport cargo {$cargo->getSerialNumber()} from {$cargo->getSource()} to {$cargo->getDestination()} through rails.\n";
    }
}