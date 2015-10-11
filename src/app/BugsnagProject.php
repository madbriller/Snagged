<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BugsnagProject extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string 
	 */
    protected $table = 'bugsnag_projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = ['user_id', 'bugsnag_account_name', 'bugsnag_auth_key'];
}
