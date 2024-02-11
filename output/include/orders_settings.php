<?php
$tdataorders = array();
$tdataorders[".searchableFields"] = array();
$tdataorders[".ShortName"] = "orders";
$tdataorders[".OwnerID"] = "";
$tdataorders[".OriginalTable"] = "orders";


$tdataorders[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataorders[".originalPagesByType"] = $tdataorders[".pagesByType"];
$tdataorders[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataorders[".originalPages"] = $tdataorders[".pages"];
$tdataorders[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataorders[".originalDefaultPages"] = $tdataorders[".defaultPages"];

//	field labels
$fieldLabelsorders = array();
$fieldToolTipsorders = array();
$pageTitlesorders = array();
$placeHoldersorders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorders["English"] = array();
	$fieldToolTipsorders["English"] = array();
	$placeHoldersorders["English"] = array();
	$pageTitlesorders["English"] = array();
	$fieldLabelsorders["English"]["id"] = "Id";
	$fieldToolTipsorders["English"]["id"] = "";
	$placeHoldersorders["English"]["id"] = "";
	$fieldLabelsorders["English"]["user_id"] = "User Id";
	$fieldToolTipsorders["English"]["user_id"] = "";
	$placeHoldersorders["English"]["user_id"] = "";
	$fieldLabelsorders["English"]["total_amount"] = "Total Amount";
	$fieldToolTipsorders["English"]["total_amount"] = "";
	$placeHoldersorders["English"]["total_amount"] = "";
	$fieldLabelsorders["English"]["status"] = "Status";
	$fieldToolTipsorders["English"]["status"] = "";
	$placeHoldersorders["English"]["status"] = "";
	$fieldLabelsorders["English"]["created_at"] = "Created At";
	$fieldToolTipsorders["English"]["created_at"] = "";
	$placeHoldersorders["English"]["created_at"] = "";
	if (count($fieldToolTipsorders["English"]))
		$tdataorders[".isUseToolTips"] = true;
}


	$tdataorders[".NCSearch"] = true;



$tdataorders[".shortTableName"] = "orders";
$tdataorders[".nSecOptions"] = 0;

$tdataorders[".mainTableOwnerID"] = "";
$tdataorders[".entityType"] = 0;
$tdataorders[".connId"] = "ecommerce_at_localhost";


$tdataorders[".strOriginalTableName"] = "orders";

	



$tdataorders[".showAddInPopup"] = false;

$tdataorders[".showEditInPopup"] = false;

$tdataorders[".showViewInPopup"] = false;

$tdataorders[".listAjax"] = false;
//	temporary
//$tdataorders[".listAjax"] = false;

	$tdataorders[".audit"] = false;

	$tdataorders[".locking"] = false;


$pages = $tdataorders[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorders[".edit"] = true;
	$tdataorders[".afterEditAction"] = 1;
	$tdataorders[".closePopupAfterEdit"] = 1;
	$tdataorders[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorders[".add"] = true;
$tdataorders[".afterAddAction"] = 1;
$tdataorders[".closePopupAfterAdd"] = 1;
$tdataorders[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataorders[".list"] = true;
}



$tdataorders[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataorders[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorders[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorders[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorders[".printFriendly"] = true;
}



$tdataorders[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorders[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorders[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorders[".isUseAjaxSuggest"] = true;





$tdataorders[".ajaxCodeSnippetAdded"] = false;

$tdataorders[".buttonsAdded"] = false;

$tdataorders[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorders[".isUseTimeForSearch"] = false;


$tdataorders[".badgeColor"] = "DB7093";


$tdataorders[".allSearchFields"] = array();
$tdataorders[".filterFields"] = array();
$tdataorders[".requiredSearchFields"] = array();

$tdataorders[".googleLikeFields"] = array();
$tdataorders[".googleLikeFields"][] = "id";
$tdataorders[".googleLikeFields"][] = "user_id";
$tdataorders[".googleLikeFields"][] = "total_amount";
$tdataorders[".googleLikeFields"][] = "status";
$tdataorders[".googleLikeFields"][] = "created_at";



$tdataorders[".tableType"] = "list";

$tdataorders[".printerPageOrientation"] = 0;
$tdataorders[".nPrinterPageScale"] = 100;

$tdataorders[".nPrinterSplitRecords"] = 40;

$tdataorders[".geocodingEnabled"] = false;










$tdataorders[".pageSize"] = 20;

$tdataorders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataorders[".strOrderBy"] = $tstrOrderBy;

$tdataorders[".orderindexes"] = array();


$tdataorders[".sqlHead"] = "SELECT id,  	user_id,  	total_amount,  	status,  	created_at";
$tdataorders[".sqlFrom"] = "FROM orders";
$tdataorders[".sqlWhereExpr"] = "";
$tdataorders[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorders[".arrGroupsPerPage"] = $arrGPP;

$tdataorders[".highlightSearchResults"] = true;

$tableKeysorders = array();
$tableKeysorders[] = "id";
$tdataorders[".Keys"] = $tableKeysorders;


$tdataorders[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "orders";
	$fdata["Label"] = GetFieldLabel("orders","id");
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


	$tdataorders["id"] = $fdata;
		$tdataorders[".searchableFields"][] = "id";
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "orders";
	$fdata["Label"] = GetFieldLabel("orders","user_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "user_id";

		$fdata["sourceSingle"] = "user_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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
	$edata["LookupTable"] = "users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "username";

	

	
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


	$tdataorders["user_id"] = $fdata;
		$tdataorders[".searchableFields"][] = "user_id";
//	total_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_amount";
	$fdata["GoodName"] = "total_amount";
	$fdata["ownerTable"] = "orders";
	$fdata["Label"] = GetFieldLabel("orders","total_amount");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_amount";

		$fdata["sourceSingle"] = "total_amount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_amount";

	
	
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


	$tdataorders["total_amount"] = $fdata;
		$tdataorders[".searchableFields"][] = "total_amount";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "orders";
	$fdata["Label"] = GetFieldLabel("orders","status");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "pending";
	$edata["LookupValues"][] = "completed";
	$edata["LookupValues"][] = "cancelled";

	
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


	$tdataorders["status"] = $fdata;
		$tdataorders[".searchableFields"][] = "status";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "orders";
	$fdata["Label"] = GetFieldLabel("orders","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataorders["created_at"] = $fdata;
		$tdataorders[".searchableFields"][] = "created_at";


$tables_data["orders"]=&$tdataorders;
$field_labels["orders"] = &$fieldLabelsorders;
$fieldToolTips["orders"] = &$fieldToolTipsorders;
$placeHolders["orders"] = &$placeHoldersorders;
$page_titles["orders"] = &$pageTitlesorders;


changeTextControlsToDate( "orders" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["orders"] = array();
//	order_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="order_details";
		$detailsParam["dOriginalTable"] = "order_details";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "order_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("order_details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["orders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["orders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["orders"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["orders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["orders"][$dIndex]["detailKeys"][]="order_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["orders"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["orders"][0] = $masterParams;
				$masterTablesData["orders"][0]["masterKeys"] = array();
	$masterTablesData["orders"][0]["masterKeys"][]="id";
				$masterTablesData["orders"][0]["detailKeys"] = array();
	$masterTablesData["orders"][0]["detailKeys"][]="user_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_orders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	user_id,  	total_amount,  	status,  	created_at";
$proto0["m_strFrom"] = "FROM orders";
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
	"m_strTable" => "orders",
	"m_srcTableName" => "orders"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "orders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "orders",
	"m_srcTableName" => "orders"
));

$proto8["m_sql"] = "user_id";
$proto8["m_srcTableName"] = "orders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "total_amount",
	"m_strTable" => "orders",
	"m_srcTableName" => "orders"
));

$proto10["m_sql"] = "total_amount";
$proto10["m_srcTableName"] = "orders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "orders",
	"m_srcTableName" => "orders"
));

$proto12["m_sql"] = "status";
$proto12["m_srcTableName"] = "orders";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "orders",
	"m_srcTableName" => "orders"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "orders";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "orders";
$proto17["m_srcTableName"] = "orders";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "user_id";
$proto17["m_columns"][] = "total_amount";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "created_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "orders";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "orders";
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
$proto0["m_srcTableName"]="orders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_orders = createSqlQuery_orders();


	
		;

					

$tdataorders[".sqlquery"] = $queryData_orders;



$tdataorders[".hasEvents"] = false;

?>