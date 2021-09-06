<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendOrderReady implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $condition;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($condition)
    {
        $this->condition = $condition;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('OutPanel');
    }

    public function broadcastAs()
    {
        return 'SendOrderReady';
    }

    public function broadcastWith(){
        return [
            'data' => $this->condition
        ];
    }
}
