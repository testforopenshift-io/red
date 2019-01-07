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
namespace OC\Share20\ExtraPermissions;

use OCP\Share\ExtraPermissions\IManager;
use OCP\Share\IShare;

/**
 * @inheritdoc
 */
class Manager implements IManager {

	/**
	 * @var array
	 */
	private $registeredExtraPermissionsMap;

	/**
	 * Manager constructor.
	 *
	 */
	public function __construct() {
		$this->registeredExtraPermissionsMap = array();
	}

	/**
	 * @inheritdoc
	 */
	public function registerExtraPermission($appId, $permissionId, $permissionLabel, $permissionDescription) {
		$this->registeredExtraPermissionsMap[$appId][$permissionId]['label'] = $permissionLabel;
		$this->registeredExtraPermissionsMap[$appId][$permissionId]['description'] = $permissionDescription;
		$this->registeredExtraPermissionsMap[$appId][$permissionId]['nodeTypeFilter'] = [];
		$this->registeredExtraPermissionsMap[$appId][$permissionId]['shareTypeFilter'] = [];

		return true;
	}

	/**
	 * @inheritdoc
	 */
	public function registerAllowedNodeType($appId, $permissionId, $nodeTypeFilter){
		$this->registeredExtraPermissionsMap[$appId][$permissionId]['nodeTypeFilter'] = $nodeTypeFilter;
	}

	/**
	 * @inheritdoc
	 */
	public function registerAllowedShareType($appId, $permissionId, $shareTypeFilter){
		$this->registeredExtraPermissionsMap[$appId][$permissionId]['shareTypeFilter'] = $shareTypeFilter;
	}

	/**
	 * @inheritdoc
	 */
	public function getExtraPermissionApps() {
		return \array_keys($this->registeredExtraPermissionsMap);
	}

	/**
	 * @inheritdoc
	 */
	public function getExtraPermissionKeys($appId) {
		if (array_key_exists($appId, $this->registeredExtraPermissionsMap)) {
			return \array_keys($this->registeredExtraPermissionsMap[$appId]);
		}
		return [];
	}

	/**
	 * @inheritdoc
	 */
	public function getRegisteredLabel($appId, $permissionId) {
		if (array_key_exists($appId, $this->registeredExtraPermissionsMap) &&
			array_key_exists($permissionId, $this->registeredExtraPermissionsMap[$appId])) {
			return $this->registeredExtraPermissionsMap[$appId][$permissionId]['label'];
		}
		return null;
	}

	/**
	 * @inheritdoc
	 */
	public function getRegisteredDescription($appId, $permissionId) {
		if (array_key_exists($appId, $this->registeredExtraPermissionsMap) &&
			array_key_exists($permissionId, $this->registeredExtraPermissionsMap[$appId])) {
			return $this->registeredExtraPermissionsMap[$appId][$permissionId]['description'];
		}
		return null;
	}

	/**
	 * @inheritdoc
	 */
	public function isNodeTypeAllowed($appId, $permissionId, $nodeType) {
		// FIXME: implement
		return true;
	}

	/**
	 * @inheritdoc
	 */
	public function isShareTypeAllowed($appId, $permissionId, $shareType) {
		// FIXME: implement
		return true;
	}

	/**
	 * @inheritdoc
	 */
	public function newPermission() {
		return new Permission();
	}
}
