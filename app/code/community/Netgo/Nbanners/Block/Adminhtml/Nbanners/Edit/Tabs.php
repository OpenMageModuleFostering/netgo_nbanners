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
class Netgo_Nbanners_Block_Adminhtml_Nbanners_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("nbanners_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("nbanners")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("nbanners")->__("Item Information"),
				"title" => Mage::helper("nbanners")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("nbanners/adminhtml_nbanners_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
