<?php

namespace fishStore\View\admin;


/**
 * items
 *
 * The admin view for the Other Items collection
 *
 * @package    fishStore
 * @author     Pete Burkindine <pburkind@gmail.com>
 * @copyright  2016
 * @version    Release: 1.3
 */
class items extends \fishStore\Base\View
{
	
	/**
	 * GetHTML
	 *
	 * Return the HTML for the Other Items admin view
	 *
	 * @param (Model) The data model for the view, if any
	 * @return (string) The HTML
	 */
	public function GetHTML( \fishStore\Base\Model $model = null )
	{
		global $html, $_ENVELOPE;
		$out = 'Other Items';
		
		
		return $out;
	
	} // GetHTML
	
} // items
