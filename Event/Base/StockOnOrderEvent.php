<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace StockOnOrder\Event\Base;

use Thelia\Core\Event\ActionEvent;
use StockOnOrder\Model\StockOnOrder;

/**
* Class StockOnOrderEvent
* @package StockOnOrder\Event\Base
* @author TheliaStudio
*/
class StockOnOrderEvent extends ActionEvent
{
    protected $orderId;
    protected $isStockDecreased;
    protected $stockOnOrder;

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getIsStockDecreased()
    {
        return $this->isStockDecreased;
    }

    public function setIsStockDecreased($isStockDecreased)
    {
        $this->isStockDecreased = $isStockDecreased;

        return $this;
    }

    public function getStockOnOrder()
    {
        return $this->stockOnOrder;
    }

    public function setStockOnOrder(StockOnOrder $stockOnOrder)
    {
        $this->stockOnOrder = $stockOnOrder;

        return $this;
    }
}
