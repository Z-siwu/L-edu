<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
  use SoftDeletes;

  protected $fillable=['company_id','title','body','image','refused','refuse_reason',
    'moderator_id','view','slug','category_id','subcategory_id','deadline','recoverable'];
  protected $dates = ['created_at', 'updated_at','deadline','deleted_at'];

    public function company(){
      return $this->belongsTo('App\Company');
    }

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function subcategory(){
      return $this->belongsTo('App\Subcategory');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }

    public function reports(){
      return $this->hasMany('App\Report');
    }

    public function logs(){
      return $this->morphMany('App\Log','loggable');
    }

    public function reminders(){
      return $this->hasMany('App\Reminder');
    }

    public function savings(){
      return $this->belongsToMany('App\Post', 'saved_posts', 'user_id', 'post_id');
    }

}
