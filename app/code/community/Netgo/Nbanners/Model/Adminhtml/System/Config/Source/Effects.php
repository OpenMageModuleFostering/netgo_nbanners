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
class Netgo_Nbanners_Model_Adminhtml_System_Config_Source_Effects
{
   public function toOptionArray()
   {
       $effects = array(
           array('value' => 'scrollHorz', 'label' => 'Scroll Horizontal'),
           array('value' => 'scrollVert', 'label' => 'Scroll Vertical'),
           array('value' => 'shuffle', 'label' => 'Shuffle'),
		   array('value' => 'fade', 'label' => 'Fade'),
		   array('value' => 'scrollUp', 'label' => 'Scroll Up'),
       );
 
       return $effects;
   }
}
