<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    /* Manually set variables for CRUD especially filling data
     * Reference: http://stackoverflow.com/questions/22280136/massassignmentexception-in-laravel
     */
    protected $fillable = array('author', 'text');

    //Set table
    protected $table = 'comments';
}
