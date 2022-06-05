<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function submenu()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }
    public function children()
    {
        return $this->submenu()->with('children');
    }

}
