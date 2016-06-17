<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later. see LICENSE
 */

namespace Windwalker\Web;

use Windwalker\Core\Application\WebApplication;
use Windwalker\Core\Provider;
use Windwalker\Core\WindwalkerTrait;

/**
 * Class Application
 *
 * @since 2.0
 */
class Application extends WebApplication
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'web';

	/**
	 * initialise
	 *
	 * @return  void
	 */
	protected function init()
	{
		parent::init();
	}

	/**
	 * Prepare execute hook.
	 *
	 * @return  void
	 */
	protected function prepareExecute()
	{
		
	}

	/**
	 * Pose execute hook.
	 *
	 * @return  mixed
	 */
	protected function postExecute()
	{
	}
}
