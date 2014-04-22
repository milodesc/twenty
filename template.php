<?php
function twenty_preprocess_html(&$variables, $hook) {
  // Attributes for html element.
  $variables['html_attributes_array'] = array(
    'lang' => $variables['language']->language,
    'dir' => $variables['language']->dir,
  );
}

function twenty_process_html(&$variables, $hook) {
  // Flatten out html_attributes.
  $variables['html_attributes'] = drupal_attributes($variables['html_attributes_array']);
}

function twenty_preprocess_page(&$variables) {
    global $user;
    if ($user->uid > 0) {
        $variables['log_button'] = l("Log Out", "user/logout", array('attributes' => array('class' => 'button special')));
    }
    else {
        $variables['log_button'] = l("Log In", "user", array('attributes' => array('class' => 'button special')));
    }
}