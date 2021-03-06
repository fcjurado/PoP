<?php

/**---------------------------------------------------------------------------------------------------------------
 *
 * PageSection Hooks
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class AgendaUrbana_CategoryProcessors_BlockGroupHooks {

	function __construct() {

		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:home_widgetarea',
			array($this, 'hometop_widget_blocks'),
			20
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:author_widgetarea',
			array($this, 'authortop_widget_blocks'),
			20
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:tag_widgetarea',
			array($this, 'tagtop_widget_blocks'),
			20
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:atts',
			array($this, 'block_atts'),
			10,
			5
		);
	}

	function block_atts($blockgroup_block_atts, $blockgroup_block, $blockgroup, $blockgroup_atts, $processor) {

		switch ($blockgroup) {

			case GD_TEMPLATE_BLOCKGROUP_AUTHOR_WIDGETAREA:
			case GD_TEMPLATE_BLOCKGROUP_TAG_WIDGETAREA:

				// Hide if block is empty
				$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'hidden-if-empty', true);
				break;
			
			case GD_TEMPLATE_BLOCKGROUP_HOME_WIDGETAREA:

				if (AGENDAURBANA_CAT_FEATURED) {

					$cat_blocks = array(
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_CAROUSEL,
						POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_CAROUSEL,
					);
					if ($blockgroup_block == $cat_blocks[AGENDAURBANA_CAT_FEATURED]) {
						
						// Hide if block is empty
						$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'hidden-if-empty', true);
					}
				}
				break;
		}

		return $blockgroup_block_atts;
	}

	function hometop_widget_blocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		if (AGENDAURBANA_CAT_FEATURED) {

			$cat_blocks = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_CAROUSEL,
			);
			if ($cat_block = $cat_blocks[AGENDAURBANA_CAT_FEATURED]) {
				$blocks[] = $cat_block;
			}
		}

		return $blocks;
	}

	function authortop_widget_blocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		if (AGENDAURBANA_CAT_FEATURED) {

			$cat_blocks = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS00_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS01_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS02_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS03_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS04_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS05_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS06_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS07_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS08_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS09_CAROUSEL,
			);
			if ($cat_block = $cat_blocks[AGENDAURBANA_CAT_FEATURED]) {
				$blocks[] = $cat_block;
			}
		}

		return $blocks;
	}

	function tagtop_widget_blocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		if (AGENDAURBANA_CAT_FEATURED) {

			$cat_blocks = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS00_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS01_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS02_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS03_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS04_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS05_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS06_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS07_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS08_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_CAT_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_TAGCATEGORYPOSTS09_CAROUSEL,
			);
			if ($cat_block = $cat_blocks[AGENDAURBANA_CAT_FEATURED]) {
				$blocks[] = $cat_block;
			}
		}

		return $blocks;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new AgendaUrbana_CategoryProcessors_BlockGroupHooks();
