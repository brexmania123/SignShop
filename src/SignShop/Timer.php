<?php
namespace SignShop;
use pocketmine\scheduler\PluginTask;
class Timer extends PluginTask{
    public function onRun($currentTick){
        $this->getOwner()->respawnAllSign();  
    }
}