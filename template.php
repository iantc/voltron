<?php
function voltron_preprocess_html(&$variables) {
  //drupal_add_css('http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css', array('type' => 'external'));
  drupal_add_css('http://netdna.bootstrapcdn.com/bootswatch/2.1.0/spacelab/bootstrap.no-icons.min.css', array('type' => 'external','group' => CSS_THEME,'weight' => 100));
  drupal_add_css('http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css', array('type' => 'external'));
}

/**
 * Custom theme function for the login/register link.
 */
function voltron_lt_login_link($variables) {
  // Only display register text if registration is allowed.
  if (variable_get('user_register', USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL)) {
    return t('Sign In');
  }
  else {
    return t('Log in');
  }
}
