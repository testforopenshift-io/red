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

use OCP\Share\ExtraPermissions\IPermission;

class Permission implements IPermission {

	/** @var string */
	private $app;
	/** @var string */
	private $id;

	public function setApp($app) {
		$this->app = $app;
		return $this;
	}

	public function getApp() {
		return $this->app;
	}

	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	public function getId() {
		return $this->id;
	}
}
