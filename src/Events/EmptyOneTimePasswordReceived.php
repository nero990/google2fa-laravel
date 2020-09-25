<?php

namespace Nero990\Google2FALaravel\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmptyOneTimePasswordReceived
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;
}
