<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'raffle_id',
        'user_ticket_id',
        'ticket_number',
    ];

    /**
     * Get the user who owns the ticket.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the raffle associated with the ticket.
     */
    public function raffle()
    {
        return $this->belongsTo(Raffle::class);
    }

    /**
     * Get the user ticket record.
     */
    public function userTicket()
    {
        return $this->belongsTo(UserTicket::class, 'user_ticket_id');
    }
}
