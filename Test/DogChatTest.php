<?php
namespace GDO\DogChatGPT\Test;

use GDO\Dog\Test\DogTestCase;

final class DogChatTest extends DogTestCase
{
	
	public function testBasicChat(): void
	{
		$r = $this->bashCommand('gpt Hello, are you a bot?');
		assertStringContainsStringIgnoringCase('yes', $r, 'Test if chatgpt works.');
	}
	
}
