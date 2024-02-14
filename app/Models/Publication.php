<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'publications';
    protected $fillable = [
        'title',
        'type',
        'Number',
        'reference',
        'effective_date',
    ];

    protected $cast = [
        'title' => 'string',
        'type' => 'string',
        'Number' => 'string',
        'reference' => 'string',
        'effective_date' => 'date',
        'owner' => 'integer',
        'endorser' => 'integer',
        'endorse_date' => 'datetime',
        'verifier' => 'integer',
        'verification_date' => 'datetime',
        'approver' => 'integer',
        'approval_date' => 'datetime',
    ];
    public function rules()
    {
        return [
            'title' => 'required',
            'type' => 'required',
            'Number' => 'required',
            'reference' => 'required',
            'effective_date' => 'required',
        ];
    }
}
