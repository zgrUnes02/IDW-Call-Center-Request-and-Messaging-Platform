<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    use HasFactory ;
    use SoftDeletes ;
    
    //* relation between cv and visitor :
    public function visitors()
    {
        return $this -> belongsTo(Visitor::class , 'visitor_id') ;
    }
}
