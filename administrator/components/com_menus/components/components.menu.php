<?php
/**
* @version $Id: components.menu.php 87 2005-09-15 23:12:03Z eddieajau $
* @package Joomla
* @subpackage Menus
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

mosAdminMenus::menuItem( $type );

switch ($task) {
	case 'components':
		// this is the new item, ie, the same name as the menu `type`
		components_menu::edit( 0, $menutype, $option );
		break;

	case 'edit':
		components_menu::edit( $cid[0], $menutype, $option );
		break;


	case 'save':
	case 'apply':
		saveMenu( $option, $task );
		break;
}
?>