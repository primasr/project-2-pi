<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountCommit extends Model
{
    use HasFactory;

    protected $fillable = [
        'node_id',
        'name',
        'full_name',
        'private',
        'owner',
        'html_url',
        'description',
        'url',
        'language',
        'total_commit',
        'repo_created_at',
        'repo_updated_at',
    ];

    protected $casts = [
        'owner' => 'array',
    ];    
}
