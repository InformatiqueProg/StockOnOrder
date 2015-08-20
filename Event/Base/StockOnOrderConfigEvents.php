<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace StockOnOrder\Event\Base;

use StockOnOrder\Event\Module\StockOnOrderEvents as ChildStockOnOrderEvents;

/*
 * Class StockOnOrderConfigEvents
 * @package StockOnOrder\Event\Base
 * @author TheliaStudio
 */
class StockOnOrderConfigEvents
{
    const CREATE = ChildStockOnOrderEvents::STOCK_ON_ORDER_CONFIG_CREATE;
    const UPDATE = ChildStockOnOrderEvents::STOCK_ON_ORDER_CONFIG_UPDATE;
    const DELETE = ChildStockOnOrderEvents::STOCK_ON_ORDER_CONFIG_DELETE;
}