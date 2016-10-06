<?php
class Main_Head_Walker_Menu extends Walker {

  public $tree_type = array( 'post_type', 'taxonomy', 'custom' );


  public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );


  public function start_lvl( &$output, $depth ) {
      // depth dependent classes
      $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
      $display_depth = ( $depth + 1); // because it counts the first submenu as 0
      $classes = array(
        'sub-menu',
        ( $display_depth % 2  ? 'menu-odd menu-items col-md-12 col-xs-12' : 'menu-even' ), //ul>li>ul
        ( $display_depth >=2 ? 'sub-sub-menu submenu submenu-depth-2' : '' ), //ul>li>ul>li>ul
        'menu-depth-' . $display_depth
        );
      $class_names = implode( ' ', $classes );

      // build html
      $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }


  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;


    $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );


    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';


    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $class_names .'>';

    $atts = array();
    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    $atts['href']   = ! empty( $item->url )        ? $item->url        : '';


    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

    $attributes = '';
    foreach ( $atts as $attr => $value ) {
      if ( ! empty( $value ) ) {
        $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    /** This filter is documented in wp-includes/post-template.php */
    $title = apply_filters( 'the_title', $item->title, $item->ID );


    $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . $title . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }


  public function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li><div class='after-list'></div>\n";
  }

}

?>
