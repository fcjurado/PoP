<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Configuration
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_Template_CacheProcessor {

	function __construct() {

		add_action('init', array($this, 'init'));
	}

	function init() {

		global $gd_template_cacheprocessor_manager;
		$gd_template_cacheprocessor_manager->add($this, $this->get_templates_to_process());
	}

	function get_templates_to_process() {
	
		return array();
	}

	protected function add_vars($filename) {

		$vars = GD_TemplateManager_Utils::get_vars();		
		if ($output = $vars['output']) {	

			// output is important to differentiate between first load (loading also the frames) and all subsequent output=json requests
			// $filename .= '-output_'.$output;
			$filename .= '-'.$output;
		}
		if ($format = $vars['format']) {
			
			// $filename .= '-format_'.$format;
			$filename .= '-'.$format;
		}
		if ($target = $vars['target']) {
			
			// $filename .= '-target_'.$target;
			$filename .= '-'.$target;
		}
		if ($tab = $vars['tab']) {
			
			// $filename .= '-tab_'.$tab;
			$filename .= '-'.str_replace(array('-', '/'), '', $tab);
		}
		if ($action = $vars['action']) {
			
			$filename .= '-'.str_replace('-', '', $action);
		}
		if ($datastructure = $vars['datastructure']) {
			
			// $filename .= '-datastructure_'.$datastructure;
			$filename .= '-'.$datastructure;
		}
		if ($theme = $vars['theme']) {
			
			// $filename .= '-theme_'.$theme;
			$filename .= '-'.str_replace('-', '', $theme);
		}
		if ($thememode = $vars['thememode']) {
			
			// $filename .= '-thememode_'.$thememode;
			$filename .= '-'.str_replace('-', '', $thememode);
		}
		if ($themestyle = $vars['themestyle']) {
			
			$filename .= '-'.str_replace('-', '', $themestyle);
		}

		// Allow for plug-ins to add their own vars. Eg: URE source parameter
		$filename = apply_filters('GD_Template_CacheProcessor:add_vars', $filename);

		return $filename;
	}

	protected function add_categories($filename, $post) {

		if ($post->post_type == 'post') {

			$cats = get_the_category($post->ID);
			foreach ($cats as $cat) {
				$filename .= '_'.str_replace('-', '', $cat->slug).$cat->term_id;
			}
		}

		// Allow for plug-ins to add their own categories. Eg: Events
		$filename = apply_filters('GD_Template_CacheProcessor:add_categories', $filename, $post);

		return $filename;
	}

	function get_cache_filename($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_TOPLEVEL_PAGE:

				// Each page is an independent configuration
				global $post, $gd_dataquery_manager;
				// We add the page path to help understand what file it is, in addition to the ID (to make sure to make the configuration unique to that page)
				$filename = 'page_'.str_replace(array('-', '/'), '', GD_TemplateManager_Utils::get_page_path($post->ID)).$post->ID;

				// Special pages: dataqueries' cacheablepages serve layouts, noncacheable pages serve fields.
				// So the settings for these pages depend on the URL params
				if (in_array($post->ID, $gd_dataquery_manager->get_noncacheablepages())) {

					if ($fields = $_REQUEST['fields']) {
						if (!is_array($fields)) {
							$fields = array($fields);
						}
						// Do not add the values straight since they are too long, do a hash instead to shorten it
						// $filename .= '-fields_'.sha1(implode('', $fields));
						$filename .= '-'.sha1(implode('', $fields));
					}
				}
				elseif (in_array($post->ID, $gd_dataquery_manager->get_cacheablepages())) {

					if ($layouts = $_REQUEST['layouts']) {
						if (!is_array($layouts)) {
							$layouts = array($layouts);
						}
						// Do not add the values straight since they are too long, do a hash instead to shorten it
						// $filename .= '-layouts_'.sha1(implode('', $layouts));
						$filename .= '-'.sha1(implode('', $layouts));
					}
				}
				return $this->add_vars($filename);

			case GD_TEMPLATE_TOPLEVEL_HOME:

				// Home is pretty much unique
				return $this->add_vars('home');

			case GD_TEMPLATE_TOPLEVEL_TAG:

				// Tag is pretty much unique
				return $this->add_vars('tag');

			case GD_TEMPLATE_TOPLEVEL_AUTHOR:

				// Author: depends on its role
				global $author;
				$filename = 'author_'.str_replace('-', '', gd_ure_getuserrole($author));
				return $this->add_vars($filename);

			case GD_TEMPLATE_TOPLEVEL_SINGLE:

				// Single depends on its post_type and category
				// Past Event and (Upcoming) Event will be different because they have a different (main) category artificially associated to them
				// Project/Event volunteering: 
				global $post;
				$filename = 'single_'.$post->post_type;
				$filename = $this->add_categories($filename, $post);
				return $this->add_vars($filename);

			case GD_TEMPLATE_TOPLEVEL_404:

				// 404 is pretty much unique
				return $this->add_vars('404');
		}

		return false;
	}
}