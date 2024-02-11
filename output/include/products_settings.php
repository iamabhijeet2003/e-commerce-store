<?php
$tdataproducts = array();
$tdataproducts[".searchableFields"] = array();
$tdataproducts[".ShortName"] = "products";
$tdataproducts[".OwnerID"] = "";
$tdataproducts[".OriginalTable"] = "products";


$tdataproducts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproducts[".originalPagesByType"] = $tdataproducts[".pagesByType"];
$tdataproducts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproducts[".originalPages"] = $tdataproducts[".pages"];
$tdataproducts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproducts[".originalDefaultPages"] = $tdataproducts[".defaultPages"];

//	field labels
$fieldLabelsproducts = array();
$fieldToolTipsproducts = array();
$pageTitlesproducts = array();
$placeHoldersproducts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproducts["English"] = array();
	$fieldToolTipsproducts["English"] = array();
	$placeHoldersproducts["English"] = array();
	$pageTitlesproducts["English"] = array();
	$fieldLabelsproducts["English"]["id"] = "Id";
	$fieldToolTipsproducts["English"]["id"] = "";
	$placeHoldersproducts["English"]["id"] = "";
	$fieldLabelsproducts["English"]["name"] = "Name";
	$fieldToolTipsproducts["English"]["name"] = "";
	$placeHoldersproducts["English"]["name"] = "";
	$fieldLabelsproducts["English"]["description"] = "Description";
	$fieldToolTipsproducts["English"]["description"] = "";
	$placeHoldersproducts["English"]["description"] = "";
	$fieldLabelsproducts["English"]["price"] = "Price";
	$fieldToolTipsproducts["English"]["price"] = "";
	$placeHoldersproducts["English"]["price"] = "";
	$fieldLabelsproducts["English"]["image_url"] = "Image Url";
	$fieldToolTipsproducts["English"]["image_url"] = "";
	$placeHoldersproducts["English"]["image_url"] = "";
	$fieldLabelsproducts["English"]["created_at"] = "Created At";
	$fieldToolTipsproducts["English"]["created_at"] = "";
	$placeHoldersproducts["English"]["created_at"] = "";
	if (count($fieldToolTipsproducts["English"]))
		$tdataproducts[".isUseToolTips"] = true;
}


	$tdataproducts[".NCSearch"] = true;



$tdataproducts[".shortTableName"] = "products";
$tdataproducts[".nSecOptions"] = 0;

$tdataproducts[".mainTableOwnerID"] = "";
$tdataproducts[".entityType"] = 0;
$tdataproducts[".connId"] = "ecommerce_at_localhost";


$tdataproducts[".strOriginalTableName"] = "products";

	



$tdataproducts[".showAddInPopup"] = false;

$tdataproducts[".showEditInPopup"] = false;

$tdataproducts[".showViewInPopup"] = false;

$tdataproducts[".listAjax"] = false;
//	temporary
//$tdataproducts[".listAjax"] = false;

	$tdataproducts[".audit"] = false;

	$tdataproducts[".locking"] = false;


$pages = $tdataproducts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproducts[".edit"] = true;
	$tdataproducts[".afterEditAction"] = 1;
	$tdataproducts[".closePopupAfterEdit"] = 1;
	$tdataproducts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproducts[".add"] = true;
$tdataproducts[".afterAddAction"] = 1;
$tdataproducts[".closePopupAfterAdd"] = 1;
$tdataproducts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproducts[".list"] = true;
}



$tdataproducts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproducts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproducts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproducts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproducts[".printFriendly"] = true;
}



$tdataproducts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproducts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproducts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproducts[".isUseAjaxSuggest"] = true;





$tdataproducts[".ajaxCodeSnippetAdded"] = false;

$tdataproducts[".buttonsAdded"] = false;

$tdataproducts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducts[".isUseTimeForSearch"] = false;


$tdataproducts[".badgeColor"] = "8FBC8B";


$tdataproducts[".allSearchFields"] = array();
$tdataproducts[".filterFields"] = array();
$tdataproducts[".requiredSearchFields"] = array();

$tdataproducts[".googleLikeFields"] = array();
$tdataproducts[".googleLikeFields"][] = "id";
$tdataproducts[".googleLikeFields"][] = "name";
$tdataproducts[".googleLikeFields"][] = "description";
$tdataproducts[".googleLikeFields"][] = "price";
$tdataproducts[".googleLikeFields"][] = "image_url";
$tdataproducts[".googleLikeFields"][] = "created_at";



$tdataproducts[".tableType"] = "list";

$tdataproducts[".printerPageOrientation"] = 0;
$tdataproducts[".nPrinterPageScale"] = 100;

$tdataproducts[".nPrinterSplitRecords"] = 40;

$tdataproducts[".geocodingEnabled"] = false;










$tdataproducts[".pageSize"] = 20;

$tdataproducts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproducts[".strOrderBy"] = $tstrOrderBy;

$tdataproducts[".orderindexes"] = array();


$tdataproducts[".sqlHead"] = "SELECT id,  	name,  	description,  	price,  	image_url,  	created_at";
$tdataproducts[".sqlFrom"] = "FROM products";
$tdataproducts[".sqlWhereExpr"] = "";
$tdataproducts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducts[".arrGroupsPerPage"] = $arrGPP;

$tdataproducts[".highlightSearchResults"] = true;

$tableKeysproducts = array();
$tableKeysproducts[] = "id";
$tdataproducts[".Keys"] = $tableKeysproducts;


$tdataproducts[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","id");
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


	$tdataproducts["id"] = $fdata;
		$tdataproducts[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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


	$tdataproducts["name"] = $fdata;
		$tdataproducts[".searchableFields"][] = "name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataproducts["description"] = $fdata;
		$tdataproducts[".searchableFields"][] = "description";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","price");
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


	$tdataproducts["price"] = $fdata;
		$tdataproducts[".searchableFields"][] = "price";
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","image_url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "image_url";

		$fdata["sourceSingle"] = "image_url";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image_url";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataproducts["image_url"] = $fdata;
		$tdataproducts[".searchableFields"][] = "image_url";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","created_at");
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


	$tdataproducts["created_at"] = $fdata;
		$tdataproducts[".searchableFields"][] = "created_at";


$tables_data["products"]=&$tdataproducts;
$field_labels["products"] = &$fieldLabelsproducts;
$fieldToolTips["products"] = &$fieldToolTipsproducts;
$placeHolders["products"] = &$placeHoldersproducts;
$page_titles["products"] = &$pageTitlesproducts;


changeTextControlsToDate( "products" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["products"] = array();
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


		
	$detailsTablesData["products"][$dIndex] = $detailsParam;

	
		$detailsTablesData["products"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["products"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["products"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["products"][$dIndex]["detailKeys"][]="product_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["products"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_products()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description,  	price,  	image_url,  	created_at";
$proto0["m_strFrom"] = "FROM products";
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
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "products";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "products";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "products";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto12["m_sql"] = "price";
$proto12["m_srcTableName"] = "products";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto14["m_sql"] = "image_url";
$proto14["m_srcTableName"] = "products";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "products";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "products";
$proto19["m_srcTableName"] = "products";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "price";
$proto19["m_columns"][] = "image_url";
$proto19["m_columns"][] = "created_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "products";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "products";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="products";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_products = createSqlQuery_products();


	
		;

						

$tdataproducts[".sqlquery"] = $queryData_products;



$tdataproducts[".hasEvents"] = false;

?>