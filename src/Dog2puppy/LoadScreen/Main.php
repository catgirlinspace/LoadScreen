<?php

namespace Dog2puppy\LoadScreen;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\network\protocol\ChangeDimensionPacket;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(Command $command, CommandSender $sender, $label, array $args)
    {
        if ($command->getName() == 'loadscreen') {
            $x = $sender->getX();
            $y = $sender->getY();
            $z = $sender->getZ();
            $pk = new ChangeDimensionPacket();
            $pk->dimension = 1; //1 is the nether; 0 is the overworld
       $pk->x = (int) $x; //define X
       $pk->y = (int) $y; //define Y
       $pk->z = (int) $z; //define Z
       $player->dataPacket($pk); //$player must be an instance of a pocketmine/Player
       $pk = new ChangeDimensionPacket();
            $pk->dimension = 0; //1 is the nether; 0 is the overworld
       $pk->x = (int) $x; //define X
       $pk->y = (int) $y; //define Y
       $pk->z = (int) $z; //define Z
       $player->dataPacket($pk); //$player must be an instance of a pocketmine/Player
       if ($args[0] == 'message') {
           $player->sendMessage('[LoadScreen] Showed the loading screen');
       }
        }
    }
}
