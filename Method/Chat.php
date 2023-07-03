<?php
declare(strict_types=1);
namespace GDO\DogChatGPT\Method;

use GDO\ChatGPT\Module_ChatGPT;
use GDO\Core\GDT_Text;
use GDO\Dog\DOG_Command;
use GDO\Dog\DOG_Message;

/**
 * Chat with ChatGPT.
 *
 * @version 7.0.3
 * @author gizmore
 */
final class Chat extends DOG_Command
{

	public function getCLITrigger(): string
	{
		return 'gpt';
	}

	public function gdoParameters(): array
	{
		return [
			GDT_Text::make('text')->notNull(),
		];
	}

	public function dogExecute(DOG_Message $message, string $text): void
	{
		$mod = Module_ChatGPT::instance();
		$gpt = $mod->getClient();
        $message->reply('yes');
	}

}
