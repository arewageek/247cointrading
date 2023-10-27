<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Investments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'capital',
        'profit',
        'plan',
        'status',
        'due_at',
    ];

    protected $table = 'investments';

    public function totalProfits(){
        return DB::table('investments') -> sum('profit');
    }
}
