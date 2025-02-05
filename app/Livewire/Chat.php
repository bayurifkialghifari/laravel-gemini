<?php

namespace App\Livewire;

use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Prism;
use EchoLabs\Prism\ValueObjects\Messages\AssistantMessage;
use EchoLabs\Prism\ValueObjects\Messages\UserMessage;
use Livewire\Component;

class Chat extends Component
{
    public $chat = '';
    public $response = '';

    public function render()
    {
        return view('livewire.chat');
    }

    public function generate()
    {
        $response = Prism::text()
            ->using(Provider::Gemini, config('prism.providers.gemini.model'))
            ->withMessages([
                new UserMessage($this->chat),
            ])
            ->generate();

        $this->response = $response->text;
    }
}
