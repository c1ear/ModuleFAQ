<?php
namespace Storenameaslkd\ModuleCrud\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;
class Data extends AbstractHelper {
    public function getModel($modelName){
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $model = $objectManager->create('\Storenameaslkd\ModuleCrud\Model\\'.ucfirst($modelName));
        return $model;
    }
}
?>