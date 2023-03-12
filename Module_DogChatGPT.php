<?php
namespace GDO\DogChatGPT;

use GDO\Core\GDO_Module;

/**
 * ChatGPT chat functionality.
 * 
 * @author gizmore
 * @version 7.0.2
 */
final class Module_DogChatGPT extends GDO_Module
{
	
	public function getDependencies(): array
	{
		return [
			'ChatGPT',
			'Dog',
		];
	}
	
	public function onLoadLanguage(): void
	{
		$this->loadLanguage('lang/doggpt');
	}
	
}
