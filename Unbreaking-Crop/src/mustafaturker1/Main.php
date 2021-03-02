<?php

namespace mustafaturker1;

use pocketmine\block\Lava;
use pocketmine\block\Water;
use pocketmine\event\block\BlockFormEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\MainLogger;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        MainLogger::$logger->alert("Unbreaking-Crop Enable - https://github.com/Mustafaturker1");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function event(BlockFormEvent $event)
    {
        if ($event->getBlock() instanceof Water){
            $event->setCancelled(false);
        }
        if ($event->getBlock() instanceof Lava){
            $event->setCancelled(false);
        }
    }
}