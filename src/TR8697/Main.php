<?php

namespace TR8697;

use pocketmine\plugin\PluginBase;
use TR8697\Command\LobiCommand;

class Main extends PluginBase{
    public function onEnable(): void
    {
        $this->getLogger()->info("başladı");
        $this->getServer()->getCommandMap()->register('lobi',new LobiCommand("lobi","lobiye ışınlar","/hub"));
    }
}