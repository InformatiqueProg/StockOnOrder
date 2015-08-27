<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace StockOnOrder\Event\Base;

use Thelia\Core\Event\ActionEvent;
use StockOnOrder\Model\StockOnOrderDecreaseOnCreation;

/**
* Class StockOnOrderDecreaseOnCreationEvent
* @package StockOnOrder\Event\Base
* @author TheliaStudio
*/
class StockOnOrderDecreaseOnCreationEvent extends ActionEvent
{
    protected $id;
    protected $moduleId;
    protected $decreaseOnOrderCreation;
    protected $stockOnOrderDecreaseOnCreation;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getModuleId()
    {
        return $this->moduleId;
    }

    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    public function getDecreaseOnOrderCreation()
    {
        return $this->decreaseOnOrderCreation;
    }

    public function setDecreaseOnOrderCreation($decreaseOnOrderCreation)
    {
        $this->decreaseOnOrderCreation = $decreaseOnOrderCreation;

        return $this;
    }

    public function getStockOnOrderDecreaseOnCreation()
    {
        return $this->stockOnOrderDecreaseOnCreation;
    }

    public function setStockOnOrderDecreaseOnCreation(StockOnOrderDecreaseOnCreation $stockOnOrderDecreaseOnCreation)
    {
        $this->stockOnOrderDecreaseOnCreation = $stockOnOrderDecreaseOnCreation;

        return $this;
    }
}
