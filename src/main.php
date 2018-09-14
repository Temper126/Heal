<?php

namespace Heal;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable("Heal Enabled"){
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        if($cmd->getName() == "heal"){

                if($sender instanceof Player){
			if($sender->hasPermission("heal.command")){
				$sender->setHealth(20);
				$sender->sendMessage("You have been healed!");
			}
			   
                }
            break;

        }

        return true;

    }

}
