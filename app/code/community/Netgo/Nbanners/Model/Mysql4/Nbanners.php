<?php
/***************************************
 *** Complete RWD Slider ***
 ***************************************
 *
 * @copyright   Copyright (c) 2015
 * @company     NetAttingo Technologies
 * @package     Netgo_Nbanners
 * @author 		Vipin
 * @dev			77vips@gmail.com
 *
 */
class Netgo_Nbanners_Model_Mysql4_Nbanners extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("nbanners/nbanners", "nbanners_id");
    }
}