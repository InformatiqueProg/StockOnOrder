<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace StockOnOrder\Form\Base;

use StockOnOrder\Form\StockOnOrderCreateForm as ChildStockOnOrderCreateForm;
use StockOnOrder\Form\Type\StockOnOrderIdType;

/**
 * Class StockOnOrderForm
 * @package StockOnOrder\Form
 * @author TheliaStudio
 */
class StockOnOrderUpdateForm extends ChildStockOnOrderCreateForm
{
    const FORM_NAME = "stock_on_order_update";

    public function buildForm()
    {
        parent::buildForm();

        $this->formBuilder
            ->add("id", StockOnOrderIdType::TYPE_NAME)
        ;
    }
}