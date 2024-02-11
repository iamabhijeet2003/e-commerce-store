<?php
$tdataecommerce_store_users = array();
$tdataecommerce_store_users[".searchableFields"] = array();
$tdataecommerce_store_users[".ShortName"] = "ecommerce_store_users";
$tdataecommerce_store_users[".OwnerID"] = "";
$tdataecommerce_store_users[".OriginalTable"] = "ecommerce store_users";


$tdataecommerce_store_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataecommerce_store_users[".originalPagesByType"] = $tdataecommerce_store_users[".pagesByType"];
$tdataecommerce_store_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataecommerce_store_users[".originalPages"] = $tdataecommerce_store_users[".pages"];
$tdataecommerce_store_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataecommerce_store_users[".originalDefaultPages"] = $tdataecommerce_store_users[".defaultPages"];

//	field labels
$fieldLabelsecommerce_store_users = array();
$fieldToolTipsecommerce_store_users = array();
$pageTitlesecommerce_store_users = array();
$placeHoldersecommerce_store_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsecommerce_store_users["English"] = array();
	$fieldToolTipsecommerce_store_users["English"] = array();
	$placeHoldersecommerce_store_users["English"] = array();
	$pageTitlesecommerce_store_users["English"] = array();
	$fieldLabelsecommerce_store_users["English"]["ID"] = "ID";
	$fieldToolTipsecommerce_store_users["English"]["ID"] = "";
	$placeHoldersecommerce_store_users["English"]["ID"] = "";
	$fieldLabelsecommerce_store_users["English"]["username"] = "Username";
	$fieldToolTipsecommerce_store_users["English"]["username"] = "";
	$placeHoldersecommerce_store_users["English"]["username"] = "";
	$fieldLabelsecommerce_store_users["English"]["password"] = "Password";
	$fieldToolTipsecommerce_store_users["English"]["password"] = "";
	$placeHoldersecommerce_store_users["English"]["password"] = "";
	$fieldLabelsecommerce_store_users["English"]["email"] = "Email";
	$fieldToolTipsecommerce_store_users["English"]["email"] = "";
	$placeHoldersecommerce_store_users["English"]["email"] = "";
	$fieldLabelsecommerce_store_users["English"]["fullname"] = "Fullname";
	$fieldToolTipsecommerce_store_users["English"]["fullname"] = "";
	$placeHoldersecommerce_store_users["English"]["fullname"] = "";
	$fieldLabelsecommerce_store_users["English"]["groupid"] = "Groupid";
	$fieldToolTipsecommerce_store_users["English"]["groupid"] = "";
	$placeHoldersecommerce_store_users["English"]["groupid"] = "";
	$fieldLabelsecommerce_store_users["English"]["active"] = "Active";
	$fieldToolTipsecommerce_store_users["English"]["active"] = "";
	$placeHoldersecommerce_store_users["English"]["active"] = "";
	$fieldLabelsecommerce_store_users["English"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsecommerce_store_users["English"]["ext_security_id"] = "";
	$placeHoldersecommerce_store_users["English"]["ext_security_id"] = "";
	if (count($fieldToolTipsecommerce_store_users["English"]))
		$tdataecommerce_store_users[".isUseToolTips"] = true;
}


	$tdataecommerce_store_users[".NCSearch"] = true;



$tdataecommerce_store_users[".shortTableName"] = "ecommerce_store_users";
$tdataecommerce_store_users[".nSecOptions"] = 0;

$tdataecommerce_store_users[".mainTableOwnerID"] = "";
$tdataecommerce_store_users[".entityType"] = 0;
$tdataecommerce_store_users[".connId"] = "ecommerce_at_localhost";


$tdataecommerce_store_users[".strOriginalTableName"] = "ecommerce store_users";

	



$tdataecommerce_store_users[".showAddInPopup"] = false;

$tdataecommerce_store_users[".showEditInPopup"] = false;

$tdataecommerce_store_users[".showViewInPopup"] = false;

$tdataecommerce_store_users[".listAjax"] = false;
//	temporary
//$tdataecommerce_store_users[".listAjax"] = false;

	$tdataecommerce_store_users[".audit"] = false;

	$tdataecommerce_store_users[".locking"] = false;


$pages = $tdataecommerce_store_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataecommerce_store_users[".edit"] = true;
	$tdataecommerce_store_users[".afterEditAction"] = 1;
	$tdataecommerce_store_users[".closePopupAfterEdit"] = 1;
	$tdataecommerce_store_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataecommerce_store_users[".add"] = true;
$tdataecommerce_store_users[".afterAddAction"] = 1;
$tdataecommerce_store_users[".closePopupAfterAdd"] = 1;
$tdataecommerce_store_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataecommerce_store_users[".list"] = true;
}



$tdataecommerce_store_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataecommerce_store_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataecommerce_store_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataecommerce_store_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataecommerce_store_users[".printFriendly"] = true;
}



$tdataecommerce_store_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataecommerce_store_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataecommerce_store_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataecommerce_store_users[".isUseAjaxSuggest"] = true;





$tdataecommerce_store_users[".ajaxCodeSnippetAdded"] = false;

$tdataecommerce_store_users[".buttonsAdded"] = false;

$tdataecommerce_store_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataecommerce_store_users[".isUseTimeForSearch"] = false;


$tdataecommerce_store_users[".badgeColor"] = "2F4F4F";


$tdataecommerce_store_users[".allSearchFields"] = array();
$tdataecommerce_store_users[".filterFields"] = array();
$tdataecommerce_store_users[".requiredSearchFields"] = array();

$tdataecommerce_store_users[".googleLikeFields"] = array();
$tdataecommerce_store_users[".googleLikeFields"][] = "ID";
$tdataecommerce_store_users[".googleLikeFields"][] = "username";
$tdataecommerce_store_users[".googleLikeFields"][] = "password";
$tdataecommerce_store_users[".googleLikeFields"][] = "email";
$tdataecommerce_store_users[".googleLikeFields"][] = "fullname";
$tdataecommerce_store_users[".googleLikeFields"][] = "groupid";
$tdataecommerce_store_users[".googleLikeFields"][] = "active";
$tdataecommerce_store_users[".googleLikeFields"][] = "ext_security_id";



$tdataecommerce_store_users[".tableType"] = "list";

$tdataecommerce_store_users[".printerPageOrientation"] = 0;
$tdataecommerce_store_users[".nPrinterPageScale"] = 100;

$tdataecommerce_store_users[".nPrinterSplitRecords"] = 40;

$tdataecommerce_store_users[".geocodingEnabled"] = false;










$tdataecommerce_store_users[".pageSize"] = 20;

$tdataecommerce_store_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataecommerce_store_users[".strOrderBy"] = $tstrOrderBy;

$tdataecommerce_store_users[".orderindexes"] = array();


$tdataecommerce_store_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataecommerce_store_users[".sqlFrom"] = "FROM `ecommerce store_users`";
$tdataecommerce_store_users[".sqlWhereExpr"] = "";
$tdataecommerce_store_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataecommerce_store_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataecommerce_store_users[".arrGroupsPerPage"] = $arrGPP;

$tdataecommerce_store_users[".highlightSearchResults"] = true;

$tableKeysecommerce_store_users = array();
$tableKeysecommerce_store_users[] = "ID";
$tdataecommerce_store_users[".Keys"] = $tableKeysecommerce_store_users;


$tdataecommerce_store_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataecommerce_store_users["ID"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdataecommerce_store_users["username"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdataecommerce_store_users["password"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdataecommerce_store_users["email"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdataecommerce_store_users["fullname"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdataecommerce_store_users["groupid"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataecommerce_store_users["active"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "ecommerce store_users";
	$fdata["Label"] = GetFieldLabel("ecommerce_store_users","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdataecommerce_store_users["ext_security_id"] = $fdata;
		$tdataecommerce_store_users[".searchableFields"][] = "ext_security_id";


$tables_data["ecommerce store_users"]=&$tdataecommerce_store_users;
$field_labels["ecommerce_store_users"] = &$fieldLabelsecommerce_store_users;
$fieldToolTips["ecommerce_store_users"] = &$fieldToolTipsecommerce_store_users;
$placeHolders["ecommerce_store_users"] = &$placeHoldersecommerce_store_users;
$page_titles["ecommerce_store_users"] = &$pageTitlesecommerce_store_users;


changeTextControlsToDate( "ecommerce store_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ecommerce store_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ecommerce store_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ecommerce_store_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM `ecommerce store_users`";
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
	"m_strName" => "ID",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "ecommerce store_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "ecommerce store_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "ecommerce store_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "ecommerce store_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "ecommerce store_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "ecommerce store_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "ecommerce store_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "ecommerce store_users",
	"m_srcTableName" => "ecommerce store_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "ecommerce store_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ecommerce store_users";
$proto23["m_srcTableName"] = "ecommerce store_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`ecommerce store_users`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "ecommerce store_users";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ecommerce store_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ecommerce_store_users = createSqlQuery_ecommerce_store_users();


	
		;

								

$tdataecommerce_store_users[".sqlquery"] = $queryData_ecommerce_store_users;



$tdataecommerce_store_users[".hasEvents"] = false;

?>