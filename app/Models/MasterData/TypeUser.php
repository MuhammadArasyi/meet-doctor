<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TypeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'type_user';

    protected $dates = [
        'created_ad',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'created_ad',
        'updated_at',
        'deleted_at'
    ];

    public function detail_user()
    {   //2 parameter(path,foreign key)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
