<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace StockOnOrder\Form\Base;

use StockOnOrder\Form\StockOnOrderDecreaseOnCreationCreateForm as ChildStockOnOrderDecreaseOnCreationCreateForm;
use StockOnOrder\Form\Type\StockOnOrderDecreaseOnCreationIdType;

/**
 * Class StockOnOrderDecreaseOnCreationForm
 * @package StockOnOrder\Form
 * @author TheliaStudio
 */
class StockOnOrderDecreaseOnCreationUpdateForm extends ChildStockOnOrderDecreaseOnCreationCreateForm
{
    const FORM_NAME = "stock_on_order_decrease_on_creation_update";

    public function buildForm()
    {
        parent::buildForm();

        $this->formBuilder
            ->add("id", StockOnOrderDecreaseOnCreationIdType::TYPE_NAME)
        ;
    }
}
