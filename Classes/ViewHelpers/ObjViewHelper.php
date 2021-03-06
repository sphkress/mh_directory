<?php

class Tx_MhDirectory_ViewHelpers_ObjViewHelper 
	extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	*	@param object $obj
	*	@param string $prob
	*	@return mixed
	*/
	public function render($obj,$prob) {
		if(is_object($obj))
			return $obj->$prop;

		if(is_array($obj))
			if(array_key_exists($prob, $obj))
				return $obj[$prob];
	}
}

?>