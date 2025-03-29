<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    protected $fillable = [
        'raffle_id',
        'user_id',
        'ticket_id',
        'prize',
        'awarded_at',
    ];

    protected $casts = [
        'awarded_at' => 'datetime',
    ];

    /**
     * Get the raffle for which this winner was selected.
     */
    public function raffle()
    {
        return $this->belongsTo(Raffle::class);
    }

    /**
     * Get the user who is the winner.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the winning ticket.
     */
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
