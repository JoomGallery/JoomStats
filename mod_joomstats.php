<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Modules/JoomStats/trunk/mod_joomstats.php $
// $Id: mod_joomstats.php 4104 2013-02-19 16:53:27Z erftralle $
/****************************************************************************************\
**   Module JoomGalleryStats for JoomGallery                                            **
**   By: JoomGallery::ProjectTeam                                                       **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/
defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__).'/helper.php';
$debugmode = $params->get('debug', 0);
$list = modJoomStatsHelper::getList($params, $debugmode);
require JModuleHelper::getLayoutPath('mod_joomstats', $params->get('layout', 'default'));