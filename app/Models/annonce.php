<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    //
    // use HasFactory;

    // Specify the table name
    protected $table = 'annonce'; // Match the table name in the database
    
    protected $fillable = [
        'titre', 'description', 'type', 'ville', 'superficie', 'etat', 'prix',
    ];}
