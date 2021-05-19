<?php
/**
 * ownCloud - roundcube mail plugin
 *
 * @author Martin Reinhardt and David Jaedke
 * @author 2019 Leonardo R. Morelli github.com/LeonardoRM
 * @copyright 2012 Martin Reinhardt contact@martinreinhardt-online.de
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

OCP\User::checkAdminUser();
OCP\Util::addStyle('roundcube', 'adminSettings');
OCP\Util::addScript('roundcube', 'adminSettings');

$oTemplate = new OCP\Template('roundcube', 'tpl.adminSettings');
$oTemplate->assign('defaultRCPath', \OC::$server->getConfig()->getAppValue('roundcube', 'defaultRCPath', ''));
$oTemplate->assign('ocServer', \OC::$server->getConfig()->getAppValue('roundcube', 'ocServer', ''));
$oTemplate->assign('domainPath', \OC::$server->getConfig()->getAppValue('roundcube', 'domainPath', ''));
$oTemplate->assign('showTopLine', \OC::$server->getConfig()->getAppValue('roundcube', 'showTopLine', ''));
$oTemplate->assign('enableSSLVerify', \OC::$server->getConfig()->getAppValue('roundcube', 'enableSSLVerify', ''));
return $oTemplate->fetchPage();