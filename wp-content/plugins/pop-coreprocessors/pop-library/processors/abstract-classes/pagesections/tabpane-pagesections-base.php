<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_Template_Processor_TabPanePageSectionsBase extends GD_Template_Processor_BootstrapPageSectionsBase {

	function get_template_source($template_id, $atts) {

		return GD_TEMPLATESOURCE_PAGESECTION_TABPANE;
	}

	function get_header_class($template_id) {

		return '';
	}
	function get_header_titles($template_id) {

		return array();
	}
	// function get_permanent_templates($template_id) {

	// 	// Allow the Sideinfo to have a permanent Events Calendar
	// 	return array();
	// }

	function get_template_configuration($template_id, $atts) {

		$ret = parent::get_template_configuration($template_id, $atts);

		if ($header_class = $this->get_header_class($template_id)) {
			$ret[GD_JS_CLASSES/*'classes'*/]['header'] = $header_class;
		}
		if ($header_titles = $this->get_header_titles($template_id)) {
			$ret[GD_JS_TITLES/*'titles'*/]['headers'] = $header_titles;
		}
		// $ret[GD_JS_TEMPLATEIDS/*'template-ids'*/]['permanent'] = $this->get_permanent_templates($template_id);		

		return $ret;
	}

	function get_pagesection_jsmethod($template_id, $atts) {

		$ret = parent::get_pagesection_jsmethod($template_id, $atts);
		$this->add_jsmethod($ret, 'copyHeader', 'tab');
		return $ret;
	}

	protected function get_atts_hierarchy_initial($template_id) {

		$atts = parent::get_atts_hierarchy_initial($template_id);
	
		$this->append_att($template_id, $atts, 'class', 'pop-pagesection-page pop-viewport toplevel');
		$this->merge_att($template_id, $atts, 'params', array(
			'data-paramsscope' => GD_SETTINGS_PARAMSSCOPE_URL
		));

		return $atts;
	}

	protected function get_initjs_blockbranches($template_id, $atts) {

		$ret = parent::get_initjs_blockbranches($template_id, $atts);

		// 2 possibilities: with the merge container (eg: main) or without it (eg: quickview)
		$id = $this->get_frontend_id($template_id, $atts);
		$ret[] = '#'.$id.'-merge > div.tab-pane.active > div.pop-block';
		$ret[] = '#'.$id.' > div.tab-pane.active > div.pop-block';

		return $ret;
	}
}

