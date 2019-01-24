
<?php
namespace MobStacker;
use pocketmine\plugin\PluginBase;
class Loader extends PluginBase {
public function onLoad() : SwiftTheDevTeam{
    $this->getLogger()->info("Plugin is being enabled. Please wait..");
}
public function onEnable() : SwiftTheDevTeam{
    $this->getLogger()->info("Plugin has been enabled succesfully. Looking for errors. (If no errors found, then you should be fine.");
}
public function onDisable() : SwiftTheDevTeam{
    $this->getLogger()->info("Plugin has been disabled. Did the server stop?");
}
}
