<?php
/**
*
* @package phpBB Extension - Loading indicator
* @copyright (c) 2014 dmzx
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\loadingindicator\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'load_language_on_setup',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/loadingindicator',
			'lang_set' => 'loading_indicator',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
