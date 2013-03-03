<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace SMB\Command;

class Mkdir extends Simple {
	public function __construct($share) {
		parent::__construct($share);
		$this->command = 'mkdir';
	}
}
