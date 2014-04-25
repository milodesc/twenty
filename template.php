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
    $log_button_attrs = array('attributes' => array('class' => 'button special'));
    if ($variables['user']->uid == 0) {
        $variables['log_button'] = l(t("Log In"), "user", $log_button_attrs);
    }
    else {
        $variables['log_button'] = l(t("Log Out"), "user/logout", $log_button_attrs);
    }

    $menu_tree = menu_tree_all_data('main-menu');
    $variables['menu_expanded'] = menu_tree_output($menu_tree);

}