<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_num',
        'vat_num',
        'address_1',
        'address_2',
        'address_3',
        'city',
        'county',
        'contry',
        'postcode',
        'email',
        'phone',
        'rep_id',
    ];

    public function user(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'rep_id')->withDefault([
            'name' => 'unassigned',
            'email' => 'none',
            'password' => 'nice try'
        ]);
    }
}
