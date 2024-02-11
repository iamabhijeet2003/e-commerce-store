<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["orders"] ) ) {
			$lookupTableLinks["orders"] = array();
		}
		if( !isset( $lookupTableLinks["orders"]["order_details.order_id"] )) {
			$lookupTableLinks["orders"]["order_details.order_id"] = array();
		}
		$lookupTableLinks["orders"]["order_details.order_id"]["edit"] = array("table" => "order_details", "field" => "order_id", "page" => "edit");
		if( !isset( $lookupTableLinks["products"] ) ) {
			$lookupTableLinks["products"] = array();
		}
		if( !isset( $lookupTableLinks["products"]["order_details.product_id"] )) {
			$lookupTableLinks["products"]["order_details.product_id"] = array();
		}
		$lookupTableLinks["products"]["order_details.product_id"]["edit"] = array("table" => "order_details", "field" => "product_id", "page" => "edit");
		if( !isset( $lookupTableLinks["users"] ) ) {
			$lookupTableLinks["users"] = array();
		}
		if( !isset( $lookupTableLinks["users"]["orders.user_id"] )) {
			$lookupTableLinks["users"]["orders.user_id"] = array();
		}
		$lookupTableLinks["users"]["orders.user_id"]["edit"] = array("table" => "orders", "field" => "user_id", "page" => "edit");
}

?>