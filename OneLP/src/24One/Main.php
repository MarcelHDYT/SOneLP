<?php
namespace OneLP;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

    public function onEnable() {
        $this->getLogger()->info("§1Das Plugin ist nun Aktiv!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable() {
        $this->getLogger()->info("§4Das Plugin ist deaktiviert!");
    }

    public function onJoin(PlayerJoinEvent $ev) {
        $p = $ev->getPlayer();
        $ev->setJoinMessage("§2Der Spieler ".TextFormat::BLUE.$p->getName()." §2hat den Server betreten!");
        $p->setGamemode(Player::SURVIVAL);
    }

    public function onQuit(PlayerQuitEvent $ev) {
        $p = $ev->getPlayer();
        $ev->setQuitMessage("§4Der Spieler ".TextFormat::BLUE.$p->getName()." §4hat den Server verlassen!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "server":
                $sender->sendMessage("§o§cWartungsArbeiten!");
                return true;
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "author":
                $sender->sendMessage("§7Der §cAuthor§7 ist §cMarcelHDYT§4!!");
                return true;
            case "heal":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§2Du wurdest geheielt!");
                    $sender->setHealth(20);
                    return true;
                }else{
                    $sender->sendMessage("§4Die Console hat kein Leben!");
                    return true;
                }
            case "feed":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§2Du wurdest gefüttert!");
                    $sender->setFood(20);
                    return true;
                }else{
                    $sender->sendMessage("§4Die Console hat kein Hunger!");
                    return true;
                }
            case "youtube":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§7My §4You§fTube §7yt.skylegit.tk");
                    return true;
                }else{
                    $sender->sendMessage("§4Please use this command In-Game§a!");
                    return true;
                }
            case "gm0":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§2Du bist nun in Gamemode Überleben!");
                    $sender->setGamemode(Player::SURVIVAL);
                    return true;
                }else{
                    $sender->sendMessage("§4Die Console hat kein Gamemode!");
                    return true;
                }
            case "gm1":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§2Du hast nun den Gamemode Kreativ!");
                    $sender->setGamemode(Player::CREATIVE);
                    return true;
                }else{
                    $sender->sendMessage("§4Die Console hat kein Gamemode!");
                    return true;
                }
            case "gm2":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§2Du hast nun den Gamemode Abenteuer!");
                    $sender->setGamemode(Player::ADVENTURE);
                    return true;
                }else{
                    $sender->sendMessage("§4Die Console hat kein Gamemode!");
                    return true;
                }
            case "gm3":
                if ($sender instanceof Player) {
                    $sender->sendMessage("§2Du hast nun den Gamemode Spectator!");
                    $sender->setGamemode(Player::SPECTATOR);
                    return true;
                }else{
                    $sender->sendMessage("§4Die Console hat kein Gamemode!");
                    return true;
                }
        }

    }
}