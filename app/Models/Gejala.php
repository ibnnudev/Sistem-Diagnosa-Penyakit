<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Gejala extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'nama',
        'kode',
        'kategori',
        'image',
        'info'
    ];

    public $timestamps = false;

    protected static $logAttributes = ['nama', 'kode'];

    protected static $igonoreChangedAttributes = ['updated_at'];

    protected static $recordEvents = ['created', 'updated', 'deleted'];

    protected static $logOnlyDirty = true;

    protected static $logName = 'gejala';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "You have {$eventName} gejala";
    }

    public function penyakits()
    {
        return $this->belongsToMany(Penyakit::class)->withPivot('value_cf');
    }

    // set kode attribute
    public function setKodeAttribute($value)
    {
        $code = str_replace('G', '', $value);
        $this->attributes['kode'] = 'G' . str_pad($code, 3, '0', STR_PAD_LEFT);
    }
}
