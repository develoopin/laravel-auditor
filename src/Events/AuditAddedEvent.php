<?php

namespace Develoopin\Audit\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Develoopin\Audit\Models\AuditActivityMoloquent;

class AuditAddedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $model;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(AuditActivityMoloquent $model)
    {
        $this->model = $model;
    }
}
