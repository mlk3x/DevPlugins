<?php
namespace Kit3rB;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\inventory\Inventory;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\permission\ServerOperator;

class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveDefaultConfig();
        $this->getLogger()->info(TextFormat::AQUA . "Kit3rB by MLK3 loaded. Coded by MLK3. Instagram: f83tt Kik: KZ8I");
    }
    public function onDisable(){
        $this->getLogger()->info(TextFormat::AQUA . "Kit3rB disabled.");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
            case "kitlist":
                $sender->sendMessage(TextFormat::GREEN . "Avaible Kit Commands:");
                $sender->sendMessage(TextFormat::GREEN . "/diamondkit   /ironkit   /goldenkit   /chainkit   /leatherkit   /foodkit   /bowkit");
                return true;
            case "diamondkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(276,0,1));
                    $sender->getInventory()->addItem(Item::get(310,0,1));
                    $sender->getInventory()->addItem(Item::get(311,0,1));
                    $sender->getInventory()->addItem(Item::get(312,0,1));
                    $sender->getInventory()->addItem(Item::get(313,0,1));
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Got Diamond Kit! Check your Inventory for the Items!");
                }
                return true;
            case "ironkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(267,0,1));
                    $sender->getInventory()->addItem(Item::get(306,0,1));
                    $sender->getInventory()->addItem(Item::get(307,0,1));
                    $sender->getInventory()->addItem(Item::get(308,0,1));
                    $sender->getInventory()->addItem(Item::get(309,0,1));
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Got Iron Kit! Check your Inventory for the Items!");
                }
                return true;
            case "goldenkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(283,0,1));
                    $sender->getInventory()->addItem(Item::get(314,0,1));
                    $sender->getInventory()->addItem(Item::get(315,0,1));
                    $sender->getInventory()->addItem(Item::get(316,0,1));
                    $sender->getInventory()->addItem(Item::get(317,0,1));
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Got Golden Kit! Check your Inventory for the Items!");
                }
                return true;
            case "chainkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(267,0,1));
                    $sender->getInventory()->addItem(Item::get(302,0,1));
                    $sender->getInventory()->addItem(Item::get(303,0,1));
                    $sender->getInventory()->addItem(Item::get(304,0,1));
                    $sender->getInventory()->addItem(Item::get(305,0,1));
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Got Chain Kit! Check your Inventory for the Items!");
                }
                return true;
            case "leatherkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(268,0,1));
                    $sender->getInventory()->addItem(Item::get(298,0,1));
                    $sender->getInventory()->addItem(Item::get(299,0,1));
                    $sender->getInventory()->addItem(Item::get(300,0,1));
                    $sender->getInventory()->addItem(Item::get(301,0,1));
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Got Leather Kit! Check your Inventory for the Items!");
                }
                return true;
            case "foodkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(260,0,10));
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Got Food Kit! Check your Inventory for the Items!");
                }
                return true;
            case "bowkit":
                if (!($sender instanceof Player)) {
                    $sender->sendMessage(TextFormat::GREEN . "[Kit3rB] Only available ingame!");
                } else {
                    $sender->getInventory()->addItem(Item::get(261,0,1));
                    $sender->getInventory()->addItem(Item::get(262,0,128));
                    $sender->sendMessage(TextFormat::GREEN . "[kit3rB] Got Bow Kit! Check your Inventory for the Items!");
                }
                return true;
        }
    }
}
/*
 *                         Coded by MLK3
 */
