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
 * Interface IPermission
 *
 * @package OCP\Share\ExtraPermissions
 * @since 10.2.0
 */
interface IPermission {

	/**
	 * @param string $app
	 * @return IPermission modified permission
	 * @since 10.2.0
	 */
	public function setApp($app);

	/**
	 * @return string
	 * @since 10.2.0
	 */
	public function getApp();

	/**
	 * @param string $id
	 * @return IPermission modified permission
	 * @since 10.2.0
	 */
	public function setId($id);

	/**
	 * @return string
	 * @since 10.2.0
	 */
	public function getId();

}
