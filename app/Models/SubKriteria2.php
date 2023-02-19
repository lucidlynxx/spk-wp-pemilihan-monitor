<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class SubKriteria2 extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    protected $with = ['user'];

    // public function penilaian()
    // {
    //     return $this->hasMany(Penilaian::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'resolusiLayar'
            ]
        ];
    }
}
