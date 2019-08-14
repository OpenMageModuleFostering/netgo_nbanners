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
class Netgo_Nbanners_Helper_Data extends Mage_Core_Helper_Abstract
{
	
	public function enabledisable(){
		$enableDisableValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/status', Mage::app()->getStore());
		return $enableDisableValue;
		
	}
	public function showpagination(){
		$paginationValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/pagination', Mage::app()->getStore());
		return $paginationValue;
		
	}
	public function effecttype(){
		$effectValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/effect', Mage::app()->getStore());
		return $effectValue;
		
	}
	/*public function pauseonhover(){
		$pauseonhoverValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/pauseonhover', Mage::app()->getStore());
		return $pauseonhoverValue;
		
	}*/
	public function sliderspeed(){
		$speedValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/speed', Mage::app()->getStore());
		return $speedValue;
		
	}
}
	 