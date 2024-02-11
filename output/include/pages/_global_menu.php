<?php
			$optionsArray = array( 'welcome' => array( 'welcomePageSkip' => false,
'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'order_details',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'orders',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'products',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'users',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid',
'welcome_item3' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => true ) ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'order_details',
'linkPage' => 'list',
'linkText' => array( 'table' => 'order_details',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'headphones' ),
'linkComments' => array( 'text' => 'Order Details description',
'type' => 0 ),
'background' => '#DC143C',
'linkType' => 0 ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'orders',
'linkPage' => 'list',
'linkText' => array( 'table' => 'orders',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'linkComments' => array( 'text' => 'Orders description',
'type' => 0 ),
'background' => '#DB7093',
'linkType' => 0 ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'products',
'linkPage' => 'list',
'linkText' => array( 'table' => 'products',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'briefcase' ),
'linkComments' => array( 'text' => 'Products description',
'type' => 0 ),
'background' => '#8FBC8B',
'linkType' => 0 ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'users',
'linkPage' => 'list',
'linkText' => array( 'table' => 'users',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Users description',
'type' => 0 ),
'background' => '#E07878',
'linkType' => 0 ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'welcomePageStay' => true,
'listTotals' => 1 );
		?>