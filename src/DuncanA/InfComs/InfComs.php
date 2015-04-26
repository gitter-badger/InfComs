<?php

namespace DuncanA/InfComs;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class InfComs extends PluginBase{

   public function onEnable () {
         $this->getLogger()->info("onEnable() has been called!");
   }
   
   public function onDisable() {
         $this->getLogger()->info("onDisable() has been called!");
   }
   
   public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "test"){
        // Execute logic
        return true;
    }

    return false;
   }
}
