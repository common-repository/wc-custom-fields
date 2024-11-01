<?php
/**
 * @package woocommercecustomfields
 */
/*
Plugin Name: WooCommerce Custom Fields
Description: This plugin adds Woocommerce Products and Variations Custom textfields. Add unlimited fields through pro version: <a href ="https://ziscom.today/product/woocommerce-custom-fields/">Buy Pro Version</a>
Version: 1.0
Author: Ziscom
Plugin URI: https://ziscom.today/woocommerce-custom-fields/
License: GPLv2 or later
Text Domain: woocommercecustomfields
*/  
add_action('admin_menu', 'wcf_custom_fields_menu');

function wcf_custom_fields_menu() {
	add_menu_page(__('wcf_custom_fields_form', 'custom-fields'), __('Woocommerce Custom Fields', 'custom-fields'), 'manage_options', 'wcf_custom_fields_form', 'wcf_custom_fields_form');
}

function wcf_custom_fields_form() {
	    echo '
		<br>
	<div class="container">
  <h5 style="font-weight: 900;
    font-style: italic;
    font-size: -webkit-xxx-large;">Add woocommerce custom product fields</h5>
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
	
	<div style="float:left; width:50%">
	<div class = "field_name1">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field name 1:</p>
    <input type ="text" name="field_name1">' . ( isset( $_POST['field_name1']) ? $field_name1 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name2">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 2:</p>
    <input type ="text" name="field_name2">' . ( isset( $_POST['field_name2']) ? $field_name2 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name3">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 3</p>
    <input type ="text" name="field_name3">' . ( isset( $_POST['field_name3']) ? $field_name3 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name4">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 4</p>
    <input type ="text" name="field_name4">' . ( isset( $_POST['field_name4']) ? $field_name4 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name5">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 5</p>
    <input type ="text" name="field_name5">' . ( isset( $_POST['field_name5']) ? $field_name5 : null ) . '
    <br>
    </div>
    </div>    

	<div style="float:left; width:50%">
	<div class = "field_name6">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field name 6:</p>
    <input type ="text" name="field_name6">' . ( isset( $_POST['field_name6']) ? $field_name6 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name7">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 7:</p>
    <input type ="text" name="field_name7">' . ( isset( $_POST['field_name7']) ? $field_name7 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name8">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 8</p>
    <input type ="text" name="field_name8">' . ( isset( $_POST['field_name8']) ? $field_name8 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name9">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 9</p>
    <input type ="text" name="field_name9">' . ( isset( $_POST['field_name9']) ? $field_name9 : null ) . '
    <br>
    </div>
    </div>
    
    <div style="float:left;">
    <div class = "field_name10">
    <p style="font-weight: 900;
    font-style: italic;
    font-size: large;">Field Name 10</p>
    <input type ="text" name="field_name10">' . ( isset( $_POST['field_name10']) ? $field_name10 : null ) . '
    <br>
    </div>
    </div>    


	<br>
    <input type="submit" name="submit" value="Submit" style="font-weight: 900;
    font-style: italic;
    font-size: x-large;"/>
    </form>
	</div>
    ';	echo '<br><br><br><br><br>';		echo '(Add unlimited fields through pro version: <a href ="https://ziscom.today/product/woocommerce-custom-fields/">Buy Pro Version</a>)';		echo '<br><br>';		echo '(For any suggestion regarding plugin, please contact us at https://ziscom.today/contact_us/ , thanks.)';

if(isset($_POST['field_name1']) || isset($_POST['field_name2']) || isset($_POST['field_name3'])  || isset($_POST['field_name4'])   || isset($_POST['field_name5'])) {
	
       $field_name1 = sanitize_text_field($_POST['field_name1']); 
		add_option( 'wcf_field_name1', $field_name1 );
		update_option( 'wcf_field_name1', $field_name1 );
		
		$field_name2 = sanitize_text_field($_POST['field_name2']);
		add_option( 'wcf_field_name2', $field_name2 );
		update_option( 'wcf_field_name2', $field_name2 );

		$field_name3 = sanitize_text_field($_POST['field_name3']);
		add_option( 'wcf_field_name3', $field_name3 );
		update_option( 'wcf_field_name3', $field_name3 );

		$field_name4 = sanitize_text_field($_POST['field_name4']);
		add_option( 'wcf_field_name4', $field_name4 );
		update_option( 'wcf_field_name4', $field_name4 );

		$field_name5 = sanitize_text_field($_POST['field_name5']);
		add_option( 'wcf_field_name5', $field_name5 );
		update_option( 'wcf_field_name5', $field_name5 );

       $field_name6 = sanitize_text_field($_POST['field_name6']); 
		add_option( 'wcf_field_name6', $field_name6 );
		update_option( 'wcf_field_name6', $field_name6 );
		
		$field_name7 = sanitize_text_field($_POST['field_name7']);
		add_option( 'wcf_field_name7', $field_name7 );
		update_option( 'wcf_field_name7', $field_name7 );

		$field_name8 = sanitize_text_field($_POST['field_name8']);
		add_option( 'wcf_field_name8', $field_name8 );
		update_option( 'wcf_field_name8', $field_name8 );

		$field_name9 = sanitize_text_field($_POST['field_name9']);
		add_option( 'wcf_field_name9', $field_name9 );
		update_option( 'wcf_field_name9', $field_name9 );

		$field_name10 = sanitize_text_field($_POST['field_name10']);
		add_option( 'wcf_field_name10', $field_name10 );
		update_option( 'wcf_field_name10', $field_name10 );

}

}

// Display Fields
add_action('woocommerce_product_options_general_product_data', 'wcf_product_custom_fields');

// Save Fields
add_action('woocommerce_process_product_meta', 'wcf_product_custom_fields_save');

function wcf_product_custom_fields()
{
    global $woocommerce, $post;
    

       $wcf_field_name1 = get_option('wcf_field_name1');
		$wcf_field_name2 = get_option('wcf_field_name2');
		$wcf_field_name3 = get_option('wcf_field_name3');
		$wcf_field_name4 = get_option('wcf_field_name4');
		$wcf_field_name5 = get_option('wcf_field_name5');
       $wcf_field_name6 = get_option('wcf_field_name6');
		$wcf_field_name7 = get_option('wcf_field_name7');
		$wcf_field_name8 = get_option('wcf_field_name8');
		$wcf_field_name9 = get_option('wcf_field_name9');
		$wcf_field_name10 = get_option('wcf_field_name10');


    echo '<div class="product_custom_field">';
    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field1',
            'placeholder' => $wcf_field_name1,
            'label' => __($wcf_field_name1, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field2',
            'placeholder' => $wcf_field_name2,
            'label' => __($wcf_field_name2, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field3',
            'placeholder' => $wcf_field_name3,
            'label' => __($wcf_field_name3, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );        

    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field4',
            'placeholder' => $wcf_field_name4,
            'label' => __($wcf_field_name4, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );        

    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field5',
            'placeholder' => $wcf_field_name5,
            'label' => __($wcf_field_name5, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );    
    
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field6',
            'placeholder' => $wcf_field_name6,
            'label' => __($wcf_field_name6, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field7',
            'placeholder' => $wcf_field_name7,
            'label' => __($wcf_field_name7, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field8',
            'placeholder' => $wcf_field_name8,
            'label' => __($wcf_field_name8, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );        

    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field9',
            'placeholder' => $wcf_field_name9,
            'label' => __($wcf_field_name9, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );        

    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field10',
            'placeholder' => $wcf_field_name10,
            'label' => __($wcf_field_name10, 'woocommerce'),
            'desc_tip' => 'true'
        )
    );        

    echo '</div>';

}

// Setup Variation hook
add_action( 'woocommerce_product_after_variable_attributes', 'wcf_variation_settings_fields', 10, 3 );
// Save Variation in database hook
add_action( 'woocommerce_save_product_variation', 'wcf_save_variation_settings_fields', 10, 2 );
/**
 * Create custom fields in variations
 *
*/
function wcf_variation_settings_fields( $loop, $variation_data, $variation ) {
	    global $woocommerce, $post;
    

        $wcf_field_name1 = get_option('wcf_field_name1');
		$wcf_field_name2 = get_option('wcf_field_name2');
		$wcf_field_name3 = get_option('wcf_field_name3');
		$wcf_field_name4 = get_option('wcf_field_name4');
		$wcf_field_name5 = get_option('wcf_field_name5');
        $wcf_field_name6 = get_option('wcf_field_name6');
		$wcf_field_name7 = get_option('wcf_field_name7');
		$wcf_field_name8 = get_option('wcf_field_name8');
		$wcf_field_name9 = get_option('wcf_field_name9');
		$wcf_field_name10 = get_option('wcf_field_name10');	
	
	// Text Field
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field1', 
			'placeholder' => $wcf_field_name1,
			'label'       => __( $wcf_field_name1, 'woocommerce' ), 
			'desc_tip'    => 'true',
	//		'description' => __( 'Enter the custom value here.', 'woocommerce' ),
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field1', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field2', 
			'placeholder' => $wcf_field_name2,
			'label'       => __( $wcf_field_name2, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field2', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field3', 
			'placeholder' => $wcf_field_name3,
			'label'       => __( $wcf_field_name3, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field3', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field4', 
			'placeholder' => $wcf_field_name4,
			'label'       => __( $wcf_field_name4, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field4', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field5', 
			'placeholder' => $wcf_field_name5,
			'label'       => __( $wcf_field_name5, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field5', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field6', 
			'placeholder' => $wcf_field_name6,
			'label'       => __( $wcf_field_name6, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field6', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field7', 
			'placeholder' => $wcf_field_name7,
			'label'       => __( $wcf_field_name7, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field7', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field8', 
			'placeholder' => $wcf_field_name8,
			'label'       => __( $wcf_field_name8, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field8', true )
		)
	);	
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field9', 
			'placeholder' => $wcf_field_name9,
			'label'       => __( $wcf_field_name9, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field9', true )
		)
	);
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_custom_variations_product_text_field10', 
			'placeholder' => $wcf_field_name10,
			'label'       => __( $wcf_field_name10, 'woocommerce' ), 
			'desc_tip'    => 'true',
			'value'       => get_post_meta( $variation->ID, '_custom_variations_product_text_field10', true )
		)
	);	
}

//save variation data in database

function wcf_save_variation_settings_fields( $post_id ) {
	// Text Field
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field1']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field1', $text_field  );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field2']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field2', $text_field  );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field3']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field3', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field4']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field4', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field5']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field5', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field6']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field6', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field7']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field7', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field8']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field8', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field9']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field9', $text_field );
	}
	
	$text_field = sanitize_text_field($_POST['_custom_variations_product_text_field10']);
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_custom_variations_product_text_field10', $text_field );
	}
	
}


//save values in database

function wcf_product_custom_fields_save($post_id)
{
    // Custom Product Text Field
    $woocommerce_custom_product_text_field1 = sanitize_text_field($_POST['_custom_product_text_field1']);
    if (!empty($woocommerce_custom_product_text_field1))
        update_post_meta($post_id, '_custom_product_text_field1', $woocommerce_custom_product_text_field1);

    
    // Custom Product Text Field
    $woocommerce_custom_product_text_field2 = sanitize_text_field($_POST['_custom_product_text_field2']);
    if (!empty($woocommerce_custom_product_text_field2))
        update_post_meta($post_id, '_custom_product_text_field2', $woocommerce_custom_product_text_field2);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field3 = sanitize_text_field($_POST['_custom_product_text_field3']);
    if (!empty($woocommerce_custom_product_text_field3))
        update_post_meta($post_id, '_custom_product_text_field3', $woocommerce_custom_product_text_field3);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field4 = sanitize_text_field($_POST['_custom_product_text_field4']);
    if (!empty($woocommerce_custom_product_text_field4))
        update_post_meta($post_id, '_custom_product_text_field4', $woocommerce_custom_product_text_field4);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field5 = sanitize_text_field($_POST['_custom_product_text_field5']);
    if (!empty($woocommerce_custom_product_text_field5))
        update_post_meta($post_id, '_custom_product_text_field5', $woocommerce_custom_product_text_field5);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field6 = sanitize_text_field($_POST['_custom_product_text_field6']);
    if (!empty($woocommerce_custom_product_text_field6))
        update_post_meta($post_id, '_custom_product_text_field6', $woocommerce_custom_product_text_field6);

    
    // Custom Product Text Field
    $woocommerce_custom_product_text_field7 = sanitize_text_field($_POST['_custom_product_text_field7']);
    if (!empty($woocommerce_custom_product_text_field7))
        update_post_meta($post_id, '_custom_product_text_field7', $woocommerce_custom_product_text_field7);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field8 = sanitize_text_field($_POST['_custom_product_text_field8']);
    if (!empty($woocommerce_custom_product_text_field8))
        update_post_meta($post_id, '_custom_product_text_field8', $woocommerce_custom_product_text_field8);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field9 = sanitize_text_field($_POST['_custom_product_text_field9']);
    if (!empty($woocommerce_custom_product_text_field9))
        update_post_meta($post_id, '_custom_product_text_field9', $woocommerce_custom_product_text_field9);

    // Custom Product Text Field
    $woocommerce_custom_product_text_field10 = sanitize_text_field($_POST['_custom_product_text_field10']);
    if (!empty($woocommerce_custom_product_text_field10))
        update_post_meta($post_id, '_custom_product_text_field10', $woocommerce_custom_product_text_field10);

}
