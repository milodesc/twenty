<?php
function twenty_preprocess_html(&$variables, $hook) {
  // Attributes for html element.
  $variables['html_attributes_array'] = array(
    'lang' => $variables['language']->language,
    'dir' => $variables['language']->dir,
  );

  if ($variables['user']->uid != 0) {
        drupal_add_css(drupal_get_path("theme", "twenty") . '/css/admin.css', array("weight" => 10));
  }
}

function twenty_process_html(&$variables, $hook) {
  // Flatten out html_attributes.
  $variables['html_attributes'] = drupal_attributes($variables['html_attributes_array']);
}

function twenty_preprocess_page(&$variables) {

    // Prep the menu so that it displays all levels of the navigation, not just the top level
    $menu_tree = menu_tree_all_data('main-menu');
    $variables['menu_expanded'] = menu_tree_output($menu_tree);

    // Set up the login/logout button
    $log_button_attrs = array('attributes' => array('class' => array('button', 'special')));
    if ($variables['user']->uid == 0) {
        $variables['log_button'] = l(t("Log In"), "user", $log_button_attrs);
    }
    else {
        $variables['log_button'] = l(t("Log Out"), "user/logout", $log_button_attrs);
    }

    $icon_items = array(
        create_footer_icon("Twitter", "fa-twitter"),
        create_footer_icon("Facebook", "fa-facebook"),
        create_footer_icon("Google+", "fa-google-plus"),
        create_footer_icon("Github", "fa-github"),
        create_footer_icon("Dribbble", "fa-dribbble")
    );
    $variables['footer_icons'] = theme('item_list', array(
        'attributes' => array('class' => array('icons')),
        'items' => $icon_items,
        'type' => 'ul'
    ));
}

function create_footer_icon($label, $class) {
    return l("<span class='label'>$label</span>", "/", array('html' => TRUE, 'attributes' => array('class' => array('icon', 'circle', $class))));
}