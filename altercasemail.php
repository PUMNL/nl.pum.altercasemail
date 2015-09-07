<?php

require_once 'altercasemail.civix.php';

/**
 * Implements hook_civicrm_alterMailParams()
 *
 * @author Erik Hommel (CiviCooP) <erik.hommel@civicoop.org>
 * @param $params
 * @param $context
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterMailParams
 */
function altercasemail_civicrm_alterMailParams(&$params, $context) {

  /*
   * issue 2561 <http://redmine.pum.nl/issues/2561>
   * remove case hash key from subject if present
   */
  if ($params['subject']) {
    if (substr($params['subject'], 0, 7) == "[case #") {
      $endPos = strpos($params['subject'], "]");
      $params['subject'] = substr($params['subject'], $endPos + 2);
    }
  }
}
/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function altercasemail_civicrm_config(&$config) {
  _altercasemail_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function altercasemail_civicrm_xmlMenu(&$files) {
  _altercasemail_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function altercasemail_civicrm_install() {
  _altercasemail_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function altercasemail_civicrm_uninstall() {
  _altercasemail_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function altercasemail_civicrm_enable() {
  _altercasemail_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function altercasemail_civicrm_disable() {
  _altercasemail_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function altercasemail_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _altercasemail_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function altercasemail_civicrm_managed(&$entities) {
  _altercasemail_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function altercasemail_civicrm_caseTypes(&$caseTypes) {
  _altercasemail_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function altercasemail_civicrm_angularModules(&$angularModules) {
_altercasemail_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function altercasemail_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _altercasemail_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function altercasemail_civicrm_preProcess($formName, &$form) {

}

*/
