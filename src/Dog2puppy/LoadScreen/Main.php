<?php

Namespace Dog2puppy\LoadScreen;

use pocketmine\plugin\PluginBase
use pocketmine\network\protocol\ChangeDimensionPacket;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener;

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onCommand(Command $command, CommandSender $sender, $label, Array $args){
    
}
