<?php

namespace DuncanA/InfComs;

use pocketmine/plugin/pluginbase;

class InfComs extends PluginBase{

   public function onEnable () {
         $this->getLogger()->info("onEnable() has been called!");
   }
   
   public function onDisable() {
         $this->getLogger()->info("onDisable() has been called!");
   }
}
