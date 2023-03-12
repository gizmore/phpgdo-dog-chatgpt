<?php
namespace GDO\DogChatGPT\Method;

use GDO\Dog\DOG_Command;
use GDO\Dog\DOG_Message;
use GDO\Core\GDT_Text;
use GDO\ChatGPT\Module_ChatGPT;

/**
 * Chat with ChatGPT.
 * 
 * @author gizmore
 * @version 7.0.2
 */
final class Chat extends DOG_Command
{
	
	public function getCLITrigger()
	{
		return 'gpt';
	}
	
	public function gdoParameters(): array
	{
		return [
			GDT_Text::make('text')->notNull(),
		];
	}
	
	public function dogExecute(DOG_Message $message, string $text)
	{
		$mod = Module_ChatGPT::instance();
		$gpt = $mod->getClient();
		
	}
	
}
