
<?php

namespace Mobstacker;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    
public function onEnable(){
    $this->getLogger()->info("Plugin has been enabled succesfully. Looking for errors. (If no errors found, then you should be fine.");
}
public function onDisable(){
    $this->getLogger()->info("Plugin has been disabled. Did the server stop?");
}
}
