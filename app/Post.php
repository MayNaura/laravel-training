<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    // public $timestamps = false;   /* I added this to deal with inserts; UPDATE_AT errors */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];

    public static $rules = [
                            'title' => 'required', 
                            'body' => 'required'
                            ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
