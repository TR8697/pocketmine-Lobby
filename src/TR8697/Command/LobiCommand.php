<?php

namespace TR8697\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;

class LobiCommand extends Command {
	public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = []) {
		parent::__construct($name, $description, $usageMessage, $aliases);
		$this->setPermission("lobi.kullan");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) {
		if (!$sender instanceof Player) {
			return;
		}

		$world = $sender->getWorld();
		if ($world !== null) {
			$spawnLocation = $world->getSpawnLocation();
			if ($spawnLocation !== null) {
				$sender->teleport($spawnLocation);
				$sender->sendMessage("Lobiye ışınlandın");
				$sender->setHealth($sender->getMaxHealth());
			} else {
				$sender->sendMessage("Spawn noktası bulunamadı.");
			}
		} else {
			$sender->sendMessage("Dünya bulunamadı.");
		}
	}
}
