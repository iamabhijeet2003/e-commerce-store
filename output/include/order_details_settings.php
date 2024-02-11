<?php
$tdataorder_details = array();
$tdataorder_details[".searchableFields"] = array();
$tdataorder_details[".ShortName"] = "order_details";
$tdataorder_details[".OwnerID"] = "";
$tdataorder_details[".OriginalTable"] = "order_details";


$tdataorder_details[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataorder_details[".originalPagesByType"] = $tdataorder_details[".pagesByType"];
$tdataorder_details[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataorder_details[".originalPages"] = $tdataorder_details[".pages"];
$tdataorder_details[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataorder_details[".originalDefaultPages"] = $tdataorder_details[".defaultPages"];

//	field labels
$fieldLabelsorder_details = array();
$fieldToolTipsorder_details = array();
$pageTitlesorder_details = array();
$placeHoldersorder_details = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorder_details["English"] = array();
	$fieldToolTipsorder_details["English"] = array();
	$placeHoldersorder_details["English"] = array();
	$pageTitlesorder_details["English"] = array();
	$fieldLabelsorder_details["English"]["id"] = "Id";
	$fieldToolTipsorder_details["English"]["id"] = "";
	$placeHoldersorder_details["English"]["id"] = "";
	$fieldLabelsorder_details["English"]["order_id"] = "Order Id";
	$fieldToolTipsorder_details["English"]["order_id"] = "";
	$placeHoldersorder_details["English"]["order_id"] = "";
	$fieldLabelsorder_details["English"]["product_id"] = "Product Id";
	$fieldToolTipsorder_details["English"]["product_id"] = "";
	$placeHoldersorder_details["English"]["product_id"] = "";
	$fieldLabelsorder_details["English"]["quantity"] = "Quantity";
	$fieldToolTipsorder_details["English"]["quantity"] = "";
	$placeHoldersorder_details["English"]["quantity"] = "";
	$fieldLabelsorder_details["English"]["price"] = "Price";
	$fieldToolTipsorder_details["English"]["price"] = "";
	$placeHoldersorder_details["English"]["price"] = "";
	if (count($fieldToolTipsorder_details["English"]))
		$tdataorder_details[".isUseToolTips"] = true;
}


	$tdataorder_details[".NCSearch"] = true;



$tdataorder_details[".shortTableName"] = "order_details";
$tdataorder_details[".nSecOptions"] = 0;

$tdataorder_details[".mainTableOwnerID"] = "";
$tdataorder_details[".entityType"] = 0;
$tdataorder_details[".connId"] = "ecommerce_at_localhost";


$tdataorder_details[".strOriginalTableName"] = "order_details";

	



$tdataorder_details[".showAddInPopup"] = false;

$tdataorder_details[".showEditInPopup"] = false;

$tdataorder_details[".showViewInPopup"] = false;

$tdataorder_details[".listAjax"] = false;
//	temporary
//$tdataorder_details[".listAjax"] = false;

	$tdataorder_details[".audit"] = false;

	$tdataorder_details[".locking"] = false;


$pages = $tdataorder_details[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorder_details[".edit"] = true;
	$tdataorder_details[".afterEditAction"] = 1;
	$tdataorder_details[".closePopupAfterEdit"] = 1;
	$tdataorder_details[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorder_details[".add"] = true;
$tdataorder_details[".afterAddAction"] = 1;
$tdataorder_details[".closePopupAfterAdd"] = 1;
$tdataorder_details[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataorder_details[".list"] = true;
}



$tdataorder_details[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataorder_details[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorder_details[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorder_details[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorder_details[".printFriendly"] = true;
}



$tdataorder_details[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorder_details[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorder_details[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorder_details[".isUseAjaxSuggest"] = true;





$tdataorder_details[".ajaxCodeSnippetAdded"] = false;

$tdataorder_details[".buttonsAdded"] = false;

$tdataorder_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorder_details[".isUseTimeForSearch"] = false;


$tdataorder_details[".badgeColor"] = "DC143C";


$tdataorder_details[".allSearchFields"] = array();
$tdataorder_details[".filterFields"] = array();
$tdataorder_details[".requiredSearchFields"] = array();

$tdataorder_details[".googleLikeFields"] = array();
$tdataorder_details[".googleLikeFields"][] = "id";
$tdataorder_details[".googleLikeFields"][] = "order_id";
$tdataorder_details[".googleLikeFields"][] = "product_id";
$tdataorder_details[".googleLikeFields"][] = "quantity";
$tdataorder_details[".googleLikeFields"][] = "price";



$tdataorder_details[".tableType"] = "list";

$tdataorder_details[".printerPageOrientation"] = 0;
$tdataorder_details[".nPrinterPageScale"] = 100;

$tdataorder_details[".nPrinterSplitRecords"] = 40;

$tdataorder_details[".geocodingEnabled"] = false;










$tdataorder_details[".pageSize"] = 20;

$tdataorder_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataorder_details[".strOrderBy"] = $tstrOrderBy;

$tdataorder_details[".orderindexes"] = array();


$tdataorder_details[".sqlHead"] = "SELECT id,  	order_id,  	product_id,  	quantity,  	price";
$tdataorder_details[".sqlFrom"] = "FROM order_details";
$tdataorder_details[".sqlWhereExpr"] = "";
$tdataorder_details[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataorder_details[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorder_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorder_details[".arrGroupsPerPage"] = $arrGPP;

$tdataorder_details[".highlightSearchResults"] = true;

$tableKeysorder_details = array();
$tableKeysorder_details[] = "id";
$tdataorder_details[".Keys"] = $tableKeysorder_details;


$tdataorder_details[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "order_details";
	$fdata["Label"] = GetFieldLabel("order_details","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_details["id"] = $fdata;
		$tdataorder_details[".searchableFields"][] = "id";
//	order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "order_id";
	$fdata["GoodName"] = "order_id";
	$fdata["ownerTable"] = "order_details";
	$fdata["Label"] = GetFieldLabel("order_details","order_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "order_id";

		$fdata["sourceSingle"] = "order_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "orders";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_details["order_id"] = $fdata;
		$tdataorder_details[".searchableFields"][] = "order_id";
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "order_details";
	$fdata["Label"] = GetFieldLabel("order_details","product_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "product_id";

		$fdata["sourceSingle"] = "product_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "products";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_details["product_id"] = $fdata;
		$tdataorder_details[".searchableFields"][] = "product_id";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "order_details";
	$fdata["Label"] = GetFieldLabel("order_details","quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "quantity";

		$fdata["sourceSingle"] = "quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quantity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_details["quantity"] = $fdata;
		$tdataorder_details[".searchableFields"][] = "quantity";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "order_details";
	$fdata["Label"] = GetFieldLabel("order_details","price");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "price";

		$fdata["sourceSingle"] = "price";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_details["price"] = $fdata;
		$tdataorder_details[".searchableFields"][] = "price";


$tables_data["order_details"]=&$tdataorder_details;
$field_labels["order_details"] = &$fieldLabelsorder_details;
$fieldToolTips["order_details"] = &$fieldToolTipsorder_details;
$placeHolders["order_details"] = &$placeHoldersorder_details;
$page_titles["order_details"] = &$pageTitlesorder_details;


changeTextControlsToDate( "order_details" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["order_details"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["order_details"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="orders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="orders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "orders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["order_details"][0] = $masterParams;
				$masterTablesData["order_details"][0]["masterKeys"] = array();
	$masterTablesData["order_details"][0]["masterKeys"][]="id";
				$masterTablesData["order_details"][0]["detailKeys"] = array();
	$masterTablesData["order_details"][0]["detailKeys"][]="order_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="products";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="products";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "products";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["order_details"][1] = $masterParams;
				$masterTablesData["order_details"][1]["masterKeys"] = array();
	$masterTablesData["order_details"][1]["masterKeys"][]="id";
				$masterTablesData["order_details"][1]["detailKeys"] = array();
	$masterTablesData["order_details"][1]["detailKeys"][]="product_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_order_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	order_id,  	product_id,  	quantity,  	price";
$proto0["m_strFrom"] = "FROM order_details";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "order_details",
	"m_srcTableName" => "order_details"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "order_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "order_id",
	"m_strTable" => "order_details",
	"m_srcTableName" => "order_details"
));

$proto8["m_sql"] = "order_id";
$proto8["m_srcTableName"] = "order_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "order_details",
	"m_srcTableName" => "order_details"
));

$proto10["m_sql"] = "product_id";
$proto10["m_srcTableName"] = "order_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "order_details",
	"m_srcTableName" => "order_details"
));

$proto12["m_sql"] = "quantity";
$proto12["m_srcTableName"] = "order_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "order_details",
	"m_srcTableName" => "order_details"
));

$proto14["m_sql"] = "price";
$proto14["m_srcTableName"] = "order_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "order_details";
$proto17["m_srcTableName"] = "order_details";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "order_id";
$proto17["m_columns"][] = "product_id";
$proto17["m_columns"][] = "quantity";
$proto17["m_columns"][] = "price";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "order_details";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "order_details";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="order_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_order_details = createSqlQuery_order_details();


	
		;

					

$tdataorder_details[".sqlquery"] = $queryData_order_details;



$tdataorder_details[".hasEvents"] = false;

?>