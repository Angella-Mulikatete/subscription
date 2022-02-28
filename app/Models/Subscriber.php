<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Subscriber extends Model
{
    use HasFactory;
    protected $table ='subscription';
    //protected $primarykey ='id';
    protected $fillable =['name','description','trial_period','invoice_period'];
}
