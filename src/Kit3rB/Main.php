<?php

namespace: Kit3rB;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\CommandSender;
use pocketmine\command\command;
use pocketmine\inventory\InventoryBase;
use pocketmine\item\Item;
use pocketmine\permission\permission;
use pocketmine\level\particle\HeartParticle;

class Main extends PluginBase(

    public function OnEnable(
    $this->getServer()->getLogger()-
>info(Color::Blue."[Kit] Plugin Has Been Enabled")
)

public function onCommand(CommandSender  $Sender,
                          Command $cmd, $label,array $args)(
    switch ($cmd->getName()){
        case'Member':

            if(isset([$args[0]]){
                switch($args[0]){

                    case'Pro':
                        if($sender->hasPermission("kit.vipkit")){
                            $sender->sendMessage(Color::RED."Succesfully");
                            $sender->sendMessage(Color::BLUE."instagram:@f83tt"
                            $sender->getInventory()->setHelmet(item::get(310,0 1));
                            $sender->getInventory()->setChestplate(item::get(307,0 1));
                            $sender->getInventory()->setLeggings(item::get(311,0 1));
                            $sender->getInventory()->setBoots(item::get(309,0 1));
                            $sender->additem(item::get(364,0 1));
                            $sender->getLevel(1)->addParticle(new HeartParticle($sender));

                        }
                }
            }
