<?php
namespace Sahil\First\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $guarded = [];
    protected $table = 'pkg_contact';

    public static function rules(){

        return [
            'email' => 'required|max:255|email',
            'name' => 'required|max:255|min:3',
            'message'=>'required'
        ];
    }
}