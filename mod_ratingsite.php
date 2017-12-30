<?php
/**
 * @version    2.0.x
 * @package    Smart Contact
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/* params */
$url = $params->get('url');

/* style */
require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
