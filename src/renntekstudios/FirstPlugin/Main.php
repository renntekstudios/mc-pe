<?php

namespace renntekstudios\FirstPlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Coommand;

class Main extends PluginBase
{
    public function onEnable()
    {
        $this->getServer()->getLogger()->info("[FirstPlugin] Plugin Enabled!");
    }
    
    public function onDisable()
    {
        $this->getServer()->getLogger()->info("[FirstPlugin] Plugin Disabled!");
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool
    {
        switch($command->getName())
        {
            case "firstplugin":
                $sender->sendMessage("[FirstPlugin] this is my first plugin!");
        }
        return true;
    }
}