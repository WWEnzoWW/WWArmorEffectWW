<?php

namespace WWEnzoWW\ArmorEffect;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\inventory\PlayerInventory;
use pocketmine\inventory\ArmorInventory;


class Main extends PluginBase implements Listener{

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onLoad() {
    	$this->getLogger()->info(TF::BLUE . "Loading...");
  }

  public function onArmorChange(EntityArmorChangeEvent $ev){
  	$player = $ev->getEntity();
    $Nid = $ev->getNewItem()->getID();
    $Oid = $ev->getOldItem()->getID();

    if($player instanceof Player){

    //Casque en Mailles
    if($Nid === 302){
 $eff = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION) , 1 * 999999, 255, true);
$player->addEffect($eff);
 $eff = new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST) , 1 * 999999, 1,true);
$player->addEffect($eff);

    }elseif($Oid === 302){
      $player->removeEffect(16);
      $player->removeEffect(11);
    }

    //Plastron en Mailles
    if($Nid === 303){
 $eff = new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST) , 2 * 999999, 2, true);
$player->addEffect($eff);
 $eff = new EffectInstance(Effect::getEffect(Effect::RESISTANCE) , 0 * 999999, 0, true);
$player->addEffect($eff);

    }elseif($Oid === 303){
      $player->removeEffect(21);
    }

    //Jambieres en Mailles
    if($Nid === 304){
 $eff = new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST) , 1 * 999999, 1, true);
$player->addEffect($eff);

    }elseif($Oid === 304){
      $player->removeEffect(8);
    }

    //Bottes en Mailles
    if($Nid === 305){
 $eff = new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST) , 1 * 999999, 1, true);
$player->addEffect($eff);

    }elseif($Oid === 305){
      $player->removeEffect(1);
    }

    //Casque en or
    if($Nid === 298){
 $eff = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION) , 1 * 999999, 255, true);
$player->addEffect($eff);
 $eff = new EffectInstance(Effect::getEffect(Effect::WATER_BREATHING) , 2 * 999999, 2,true);
$player->addEffect($eff);

    }elseif($Oid === 298){
			$player->removeEffect(1);
      $player->removeEffect(11);
    }

    //Plastron en or
    if($Nid === 299){
 $eff = new EffectInstance(Effect::getEffect(Effect::HASTE) , 1 * 999999, 2, true);
$player->addEffect($eff);


    }elseif($Oid === 299){
			$player->removeEffect(1);
      $player->removeEffect(11);
    }

    //Jambieres en or
    if($Nid === 300){
  $eff = new EffectInstance(Effect::getEffect(Effect::SPEED) , 1 * 999999, 3, true);
$player->addEffect($eff);

    }elseif($Oid === 300){
			$player->removeEffect(1);
      $player->removeEffect(11);
    }

    //Bottes en or
    if($Nid === 301){
  $eff = new EffectInstance(Effect::getEffect(Effect::JUMP_BOOST) , 1 * 999999, 3, true);
$player->addEffect($eff);

    }elseif($Oid === 301){
      $player->removeEffect(1);
      $player->removeEffect(11);
    }
  }
}
}
