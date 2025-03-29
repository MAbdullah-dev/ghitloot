<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'description',
        'status',
    ];

    /**
     * Get the user who submitted the support ticket.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
