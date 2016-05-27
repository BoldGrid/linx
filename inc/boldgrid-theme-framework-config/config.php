<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-linx';
	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';
	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = '1';
	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[widget]boldgrid-widget-2' ),
		'5' => array( '[menu]secondary' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'8' => array( '[menu]tertiary' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#336699',
                '#204265',
                '#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
			 	'#dec2ad',
                '#54352b',
                '#b26450',
                '#dec2ad',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#704752',
                '#827065',
                '#702a3d',
                '#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#f1bbba',
                '#fe4365',
                '#fc9d9a',
                '#f9cdad',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#cccccc',
                '#9f111b',
                '#6c0e15',
                '#cccccc',
			)
		)
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 11: //<-- Design
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 17: //<-- Home Repair
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 24: //<-- Music
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Tinos';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Lato';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Lato';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 180;

	// Social Icons
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Footer Social Media";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="container-fluid">
			<div class="row background-custom">
				<div class="col-md-6"></div>
				<div class="col-md-6 call-to-action">
					<h5 style="text-align: right;">Excellence That Speaks For Itself</h5>
					<h2 style="text-align: right;">ONE PIECE CAN MAKE A WORLD OF DIFFERENCE</h2>
					<p class="p-button-primary" style="text-align: right;">
						<a href="about-us" class="button-primary" style="text-align: center;">LEARN MORE</a>
					</p>
				</div>
			</div>
		</div>
HTML;

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Header';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Header';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Droid Serif';
	$controls['logo_font_size']['default'] = 48;

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
