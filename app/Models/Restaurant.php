<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public $fillable = ['name','town','address','phone','thumbnail'];

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}
