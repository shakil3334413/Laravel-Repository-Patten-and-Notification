<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function formate()
    {
        return[
            'customer_id'=>$this->id,
            'name'=>$this->name,
            'created_by'=>$this->user->name,
            'last_updated'=>$this->updated_at->diffForHumans(),
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
