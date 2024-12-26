<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // 

    protected $fillable = [
        'name',
        'description',
        'completed', 
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);  // belongsTo : la tâche appartient à un utilisateur
    }
    
}
