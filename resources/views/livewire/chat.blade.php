<div>
    <div class="container mt-5 p-5">
        <h5>Tanyakeun</h5>
        <form wire:submit="generate">
            <div class="input-group mb-3">
                <input type="text" wire:model="chat" class="form-control" placeholder="Type your message here...">
                <button class="btn btn-primary">
                    Send
                </button>
            </div>
            <div wire:loading wire:target="generate" class="alert alert-info" role="alert">
                Thinking......
            </div>
            <x-markdown :highlight-code="false">
                {{ $response }}
            </x-markdown>
        </form>
    </div>
</div>
