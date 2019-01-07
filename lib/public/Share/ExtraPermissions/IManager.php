<?php
/**
 * @author Piotr Mrowczynski <piotr@owncloud.com>
 *
 * @copyright Copyright (c) 2018, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OCP\Share\ExtraPermissions;

/**
 * This class manages registration of extra share permissions
 *
 * @package OCP\Share\ExtraPermissions
 * @since 10.2.0
 */
interface IManager {

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @param string $permissionLabel
	 * @param string $permissionDescription
	 * @return bool
	 * @since 10.2.0
	 */
	public function registerExtraPermission($appId, $permissionId, $permissionLabel, $permissionDescription);

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @param string[] $nodeTypeFilter
	 * @return bool
	 * @since 10.2.0
	 */
	public function registerAllowedNodeType($appId, $permissionId, $nodeTypeFilter);

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @param string[] $shareTypeFilter
	 * @return bool
	 * @since 10.2.0
	 */
	public function registerAllowedShareType($appId, $permissionId, $shareTypeFilter);

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @param string $nodeType
	 * @return bool
	 * @since 10.2.0
	 */
	public function isNodeTypeAllowed($appId, $permissionId, $nodeType);

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @param string $shareType
	 * @return bool
	 * @since 10.2.0
	 */
	public function isShareTypeAllowed($appId, $permissionId, $shareType);

	/**
	 * @return string[]
	 * @since 10.2.0
	 */
	public function getExtraPermissionApps();

	/**
	 * @param string $appId
	 * @return string[]
	 * @since 10.2.0
	 */
	public function getExtraPermissionKeys($appId);

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @return string
	 * @since 10.2.0
	 */
	public function getRegisteredLabel($appId, $permissionId);

	/**
	 * @param string $appId
	 * @param string $permissionId
	 * @return string
	 * @since 10.2.0
	 */
	public function getRegisteredDescription($appId, $permissionId);

	/**
	 * @return IPermission
	 * @since 10.2.0
	 */
	public function newPermission();
}
