<?php

namespace Royalcms\Component\Service\Facades;

use Royalcms\Component\Support\Facades\Facade;

/**
 * @see \Royalcms\Component\Service\ServiceManager
 */
class Service extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
	    return 'service';
	}

}
