<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;


class Ticket extends Model
{
    /*use Notifiable, UsesTenantConnection;*/
    use UsesTenantConnection;
    
    protected $guarded = [];
}
