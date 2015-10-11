<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BugsnagAccount extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string 
	 */
    protected $table = 'bugsnag_accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = ['user_id', 'account_id', 'project_name', 'bugsnag_api_key'];
}	
