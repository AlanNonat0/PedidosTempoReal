<?php

namespace App\Events\checkout;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendPreparation implements ShouldBroadcast
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
        $this->order = $condition;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('kitchen');
    }

    public function broadcastAs()
    {
        return 'SendPreparation';
    }

    public function broadcastWith(){
        return [
            'order' => $this->condition
        ];
    }
}
