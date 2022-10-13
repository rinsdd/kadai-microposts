<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Micropost;
//use Auth;
//use Validator;
class Micropost extends Model
{
    //
        protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
