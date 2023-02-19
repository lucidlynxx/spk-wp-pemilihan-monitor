<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['alternatif', 'user'];
    // protected $with = ['alternatif', 'subkriteria', 'subkriteria1', 'subkriteria2', 'subkriteria3', 'subkriteria4', 'subkriteria5', 'subkriteria6', 'user'];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id');
    }

    // public function subkriteria()
    // {
    //     return $this->belongsTo(SubKriteria::class, 'C1_id');
    // }

    // public function subkriteria1()
    // {
    //     return $this->belongsTo(SubKriteria1::class, 'C2_id');
    // }

    // public function subkriteria2()
    // {
    //     return $this->belongsTo(SubKriteria2::class, 'C3_id');
    // }

    // public function subkriteria3()
    // {
    //     return $this->belongsTo(SubKriteria3::class, 'C4_id');
    // }

    // public function subkriteria4()
    // {
    //     return $this->belongsTo(SubKriteria4::class, 'C5_id');
    // }

    // public function subkriteria5()
    // {
    //     return $this->belongsTo(SubKriteria5::class, 'C6_id');
    // }

    // public function subkriteria6()
    // {
    //     return $this->belongsTo(SubKriteria6::class, 'C7_id');
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
