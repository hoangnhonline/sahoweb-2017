<?php
require get_parent_theme_file_path( '/inc/custom-header.php' );
require get_parent_theme_file_path( '/inc/template-tags.php' );
require get_parent_theme_file_path( '/inc/template-functions.php' );
require get_parent_theme_file_path( '/inc/customizer.php' );
require get_parent_theme_file_path( '/inc/icon-functions.php' );
require get_parent_theme_file_path( '/inc/customs-post-type.php' );
require get_parent_theme_file_path( '/inc/intro.php' );
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}
function postview_set($postID) {
    $count_key = 'postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function postview_get($postID){
    $count_key = 'postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function page_nav() {
if( is_singular() )
		return;

	global $wp_query;


	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );


	if ( $paged >= 1 )
		$links[] = $paged;

	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";


	if ( get_previous_posts_link() )
		printf( '<li class="prev">%s</li>' . "\n", get_previous_posts_link() );


	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>....</li>';
	}


	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}


	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>....</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}


	if ( get_next_posts_link() )
		printf( '<li class="next">%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";
}
/*
add_action('init', 'VnKings_change_page_permalink', -1);
function VnKings_change_page_permalink() {
    global $wp_rewrite;
    if ( strstr($wp_rewrite->get_page_permastruct(), '.html') != '.html' )
    $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
}
*/
function remove_menu () {
		global $menu;
		remove_menu_page('index.php');
		remove_menu_page('tools.php');
		remove_menu_page('themes.php');
		remove_menu_page('plugins.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('woocommerce');
}
add_action('admin_menu', 'remove_menu',999);
function ap_pre_user_query($user_search) {
  $user = wp_get_current_user();
  if ($user->ID!=1) {
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.ID<>1",$user_search->query_where);
  }
}

function remove_submenu(){
	global $submenu;
	//unset($submenu['options-general.php']);
	remove_submenu_page('options-general.php','wp-htaccess-control/wp-htaccess-control.php');

}
add_action('admin_menu','remove_submenu',999);

add_filter('woocommerce_short_description', 'limit_woocommerce_short_description', 10, 1);
function limit_woocommerce_short_description($post_excerpt){
    if (!is_product()) {
        $post_excerpt = mb_substr($post_excerpt, 0, 170,"UTF-8");
    }
    return $post_excerpt;
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function bc()
{
    // Set variables for later use
    $here_text        = __( '' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<span typeof="v:Breadcrumb">';
    $link_after       = '</span>';

    $delimiter        = ' <span class="para">&#x2192;</span> ';              // Delimiter between crumbs
    $before           = '<span class="current">'; // Tag before the current crumb
    $after            = '</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /**
     * Set our own $wp_the_query variable. Do not use the global variable version due to
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() )
    {
        /**
         * Set our own $post variable. Do not use the global variable version due to
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type )
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent )
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
		if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<div class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</div><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}


add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

function get_related_posts( $taxonomy = '', $args = array() )
{
    /*
     * Before we do anything and waste unnecessary time and resources, first check if we are on a single post page
     * If not, bail early and return false
     */
    if ( !is_single() )
        return false;

    /*
     * Check if we have a valid taxonomy and also if the taxonomy exists to avoid bugs further down.
     * Return false if taxonomy is invalid or does not exist
     */
    if ( !$taxonomy )
        return false;

    $taxonomy = filter_var( $taxonomy, FILTER_SANITIZE_STRING );
    if ( !taxonomy_exists( $taxonomy ) )
        return false;

    /*
     * We have made it to here, so we should start getting our stuff togther.
     * Get the current post object to start of
     */
    $current_post = get_queried_object();

    /*
     * Get the post terms, just the ids
     */
    $terms = wp_get_post_terms( $current_post->ID, $taxonomy, array( 'fields' => 'ids') );

    /*
     * Lets only continue if we actually have post terms and if we don't have an WP_Error object. If not, return false
     */
    if ( !$terms || is_wp_error( $terms ) )
        return false;

    /*
     * Set the default query arguments
     */
    $defaults = array(
        'post_type' => $current_post->post_type,
        'post__not_in' => array( $current_post->ID),
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'terms' => $terms,
                'include_children' => false
            ),
        ),
    );

    /*
     * Validate and merge the defaults with the user passed arguments
     */
    if ( is_array( $args ) ) {
        $args = wp_parse_args( $args, $defaults );
    } else {
        $args = $defaults;
    }

    /*
     * Now we can query our related posts and return them
     */
    $q = get_posts( $args );

    return $q;
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['reviews'] ); 			// Remove the reviews tab
unset( $tabs['additional_information'] );
    return $tabs;

}

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Mô tả' );		// Rename the description tab
//	$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
	//$tabs['additional_information']['title'] = __( 'Thông số kỹ thuật' );	// Rename the additional information tab

	return $tabs;

}
add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

add_filter( 'woocommerce_checkout_fields' , 'bbloomer_remove_billing_postcode_checkout' );
 
function bbloomer_remove_billing_postcode_checkout( $fields ) {
  unset($fields['billing']['billing_postcode']);
 //unset($fields['order']['order_comments']);
unset($fields['billing']['billing_city']);
 unset($fields['billing']['billing_country']);
 unset($fields['billing']['billing_first_name']);
  unset($fields['billing']['billing_company']);
  //unset($fields['billing']['billing_address_1']);
unset($fields['billing']['billing_address_2']);
  return $fields;
}

function notld_link( $notld ) {
   global $wp;
	$notld = home_url(add_query_arg(array(),$wp->request));
    return str_replace( home_url(), "", $notld );
} 
