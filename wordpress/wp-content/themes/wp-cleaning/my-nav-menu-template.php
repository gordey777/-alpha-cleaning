<?php
class Main_Head_Walker_Menu extends Walker_nav_menu {



  public function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li><div class='after-list'></div>\n";
  }

}

?>
