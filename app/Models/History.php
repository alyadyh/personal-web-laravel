<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class History extends Model
{
    use HasFactory;
    protected $table = "histories";
    protected $fillable = [
        'title',
        'type',
        'start_date',
        'end_date',
        'info1',
        'info2',
        'info3',
        'content'
    ];

    protected $appends = ['start_date_indo', 'end_date_indo'];

    public function getStartDateIndoAttribute()
    {

        return Carbon::parse($this->attributes['start_date'])->translatedFormat('d F Y');
    }

    public function getEndDateIndoAttribute()
    {
        if($this->attributes['end_date'])
        {
            return Carbon::parse($this->attributes['end_date'])->translatedFormat('d F Y');
        } else {
            return 'Present';
        }
        
    }
}
