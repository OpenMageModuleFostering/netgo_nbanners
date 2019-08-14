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
class Netgo_Nbanners_Block_Adminhtml_Nbanners extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_nbanners";
	$this->_blockGroup = "nbanners";
	$this->_headerText = Mage::helper("nbanners")->__("Nbanners Manager");
	$this->_addButtonLabel = Mage::helper("nbanners")->__("Add New Item");
	parent::__construct();
	
	}

}