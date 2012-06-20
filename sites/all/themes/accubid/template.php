<?php
function accubid_preprocess_page(&$vars) {
    if (isset($vars['node'])) {
        $vars['theme_hook_suggestion'] = 'page__'.$vars['node']->type;
    }
}

function accubid_links($variables) {
    if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
        $pid = variable_get('menu_main_links_source', 'main-menu');
        $tree = menu_tree($pid);
        return drupal_render($tree);
    }
  return theme_links($variables);
}

function accubid_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == "user_login_block") {
	$form['links'] = Null; // Remove Request New Password and other links from Block form
	//$form['links']['#markup'] = t('Not Registerd?') . ' <a href="/user/register">' . t('Create Account') . '</a>'; // Remove Request New Password from Block form
	//$form['links']['#markup'] = ' <a href="/user/register">' . t('Create Account') . '</a>'; // Remove Request New Password from Block form
	$form['name']['#title'] = t("Username"); // Change text on form
	}
}