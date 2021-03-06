<?php

/**---------------------------------------------------------------------------------------------------------------
 *
 * Filter Links
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_FILTER_MYLINKS', 'mylinks');

class GD_Filter_MyLinks extends GD_FilterMyPosts {

	function get_filtercomponents() {
	
		global /*$gd_filtercomponent_unmoderatedstatus, */$gd_filtercomponent_search, $gd_filtercomponent_hashtags, /*$gd_filtercomponent_categories, */$gd_filtercomponent_daterangepicker, $gd_filtercomponent_orderpost;
		$status = $this->get_status_filtercomponent();
		$ret = array($status, $gd_filtercomponent_search, $gd_filtercomponent_hashtags, /*$gd_filtercomponent_categories, */$gd_filtercomponent_daterangepicker, $gd_filtercomponent_orderpost);
		// if (PoPTheme_Wassup_Utils::add_appliesto()) {
		// 	global $gd_filtercomponent_appliesto;
		// 	array_splice($ret, array_search($gd_filtercomponent_categories, $ret)+1, 0, array($gd_filtercomponent_appliesto));
		// }
		if (PoPTheme_Wassup_Utils::add_link_accesstype()) {
			global $gd_filtercomponent_linkaccess;
			array_splice($ret, array_search($gd_filtercomponent_daterangepicker, $ret), 0, array($gd_filtercomponent_linkaccess));
		}
		
		$ret = apply_filters('gd_template:filter-mylinks:filtercomponents', $ret);
		$ret = apply_filters('gd_template:filter-myposts:filtercomponents', $ret);
		return $ret;
	}
	
	function get_name() {
	
		return GD_FILTER_MYLINKS;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialize
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Filter_MyLinks();		
