<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventSchedule extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'event_schedules';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'event_program_date_id',
        'time_start',
        'time_end',
        'topic',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function event_program_date()
    {
        return $this->belongsTo(AgendaDate::class, 'event_program_date_id');
    }

    public function speakers()
    {
        return $this->belongsToMany(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
