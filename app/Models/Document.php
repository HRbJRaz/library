<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'number',
        'restriction',
        'issue',
        'revision',
        'effective_date',
        'url',
        'owner',
    ];

    protected $hidden = [
        'reviewer',
        'review_date',
        'approver',
        'approve_date',
    ];

    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'number' => 'string',
        'issue' => 'integer',
        'revision' => 'integer',
        'effective_date' => 'date',
        'url' => 'string',
        'owner' => 'integer',
    ];
}
