<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{



public function askHelp()
{
    $this->ask('create user? y/n', function ($answer) 
	{
			$resp1 = $answer->getText();
        	if ($resp1 == 'y')
			{
				$this->ask('Enter username', function ($answer)
				{
						$resp2 = $answer->getText();
						$this->say($resp2. ' is what you said?');
				}
				//$resp2 = $response->getText();
				//$resp2 = $response->getText();
				
				//$this->say($resp1. ' is what you said?');
				//exec('ping 192.168.2.128');
			}
				else
			{
				$this->say('too bad ');
			}
		
    });


}


    public function run()
    {
        $this->askHelp();
    }
}
?>