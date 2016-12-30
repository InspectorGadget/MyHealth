<?php

/**
 * All rights reserved RTGNetworkkk
 * GitHub: <https://github.com/RTGNetworkkk>
*/

namespace RTG\MyTag;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerMoveEvent;

class Health extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onMove(PlayerMoveEvent $e) {
		$p = $e->getPlayer();
		$h = $p->getHealth();
		$m = $p->getMaxHealth();
		
		$p->setNameTag($h/$m -> $p->getName());
		$p->setDisplayName($h/$m -> $p->getName());
	}
	
	public function onDisable() {
		
	}
}
