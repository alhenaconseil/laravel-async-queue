<?php

namespace Barryvdh\Queue\Models;

use Jenssegers\Mongodb\Model;

/**
 * Queue jobs.
 *
 * @property string $id
 * @property int $status
 * @property int $retries
 * @property int $delay
 * @property string  $payload
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Job extends Model
{
    const STATUS_OPEN = 0;
    const STATUS_WAITING = 1;
    const STATUS_STARTED = 2;
    const STATUS_FINISHED = 3;

    protected $collection = 'laq_async_queue';
    protected $guarded = array('id', 'created_at', 'updated_at');
}
