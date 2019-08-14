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
class Netgo_Nbanners_Block_Index extends Mage_Core_Block_Template{   


public function __construct()
    {
       parent::__construct();
       
        //echo "id is".$this->getGroup();die;
		//$status = Netgo_Nbanners_Helper_Data::enabledisable();     
        
    }

public function getSliderCollection()
    {      
       
        
		$collection = Mage::getModel('nbanners/nbanners')->getCollection();
		$collection->addFieldToFilter('nbanners_status', 1);
		$collection->addFieldToFilter('nbannergroup', $this->getGroup());//
       // $this->setCollection($collection);
		return $collection;
        
    }
}