<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS00', PoP_ServerUtils::get_template_definition('carousel-categoryposts00'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS01', PoP_ServerUtils::get_template_definition('carousel-categoryposts01'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS02', PoP_ServerUtils::get_template_definition('carousel-categoryposts02'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS03', PoP_ServerUtils::get_template_definition('carousel-categoryposts03'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS04', PoP_ServerUtils::get_template_definition('carousel-categoryposts04'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS05', PoP_ServerUtils::get_template_definition('carousel-categoryposts05'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS06', PoP_ServerUtils::get_template_definition('carousel-categoryposts06'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS07', PoP_ServerUtils::get_template_definition('carousel-categoryposts07'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS08', PoP_ServerUtils::get_template_definition('carousel-categoryposts08'));
define ('GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS09', PoP_ServerUtils::get_template_definition('carousel-categoryposts09'));

define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS00', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts00'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS01', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts01'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS02', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts02'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS03', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts03'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS04', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts04'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS05', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts05'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS06', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts06'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS07', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts07'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS08', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts08'));
define ('GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS09', PoP_ServerUtils::get_template_definition('carousel-authorcategoryposts09'));

define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS00', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts00'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS01', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts01'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS02', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts02'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS03', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts03'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS04', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts04'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS05', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts05'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS06', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts06'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS07', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts07'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS08', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts08'));
define ('GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS09', PoP_ServerUtils::get_template_definition('carousel-tagcategoryposts09'));

class CPP_Template_Processor_Carousels extends GD_Template_Processor_CarouselsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS09,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS09,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS09,
		);
	}

	function init_atts($template_id, &$atts) {
			
		switch ($template_id) {

			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS00:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS01:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS02:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS03:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS04:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS05:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS06:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS07:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS08:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS09:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS00:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS01:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS02:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS03:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS04:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS05:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS06:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS07:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS08:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS09:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS00:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS01:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS02:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS03:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS04:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS05:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS06:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS07:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS08:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS09:

				$this->append_att($template_id, $atts, 'class', 'slide');
				$this->append_att($template_id, $atts, 'class', 'widget widget-info');
				break;
		}
		
		return parent::init_atts($template_id, $atts);
	}

	function get_inner_template($template_id) {

		$inners = array(
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS00 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS01 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS02 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS03 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS04 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS05 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS06 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS07 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS08 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS09 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS09,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS00 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS01 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS02 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS03 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS04 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS05 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS06 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS07 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS08 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS09 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS09,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS00 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS01 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS02 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS03 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS04 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS05 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS06 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS07 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS08 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS09 => GD_TEMPLATE_CAROUSELINNER_CATEGORYPOSTS09,
		);
		if ($inner = $inners[$template_id]) {
			return $inner;
		}

		return parent::get_inner_template($template_id);
	}

	function get_mode($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS00:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS01:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS02:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS03:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS04:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS05:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS06:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS07:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS08:
			case GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS09:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS00:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS01:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS02:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS03:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS04:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS05:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS06:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS07:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS08:
			case GD_TEMPLATE_CAROUSEL_AUTHORCATEGORYPOSTS09:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS00:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS01:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS02:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS03:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS04:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS05:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS06:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS07:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS08:
			case GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS09:

				return 'static';
		}

		return parent::get_mode($template_id, $atts);
	}


	function get_controls_top_template($template_id) {

		$controls = array(
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS00 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS01 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS02 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS03 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS04 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS05 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS06 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS07 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS08 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_CATEGORYPOSTS09 => GD_TEMPLATE_CAROUSELCONTROLS_CATEGORYPOSTS09,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS00 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS01 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS02 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS03 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS04 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS05 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS06 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS07 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS08 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_AUTHROCATEGORYPOSTS09 => GD_TEMPLATE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS00 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS01 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS02 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS03 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS04 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS05 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS06 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS07 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS08 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08,
			GD_TEMPLATE_CAROUSEL_TAGCATEGORYPOSTS09 => GD_TEMPLATE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09,
		);
		if ($control = $controls[$template_id]) {
			return $control;
		}

		return parent::get_controls_top_template($template_id);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new CPP_Template_Processor_Carousels();