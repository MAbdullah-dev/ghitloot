<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'profile_picture',
        'date_of_birth',
        'joined_date',
        'role_id',
        'ticket_balance',
        'profile_completion_awarded',
        'last_login_award_date',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at'         => 'datetime',
        'date_of_birth'             => 'date',
        'joined_date'               => 'date',
        'last_login_award_date'     => 'date',
        'profile_completion_awarded'=> 'boolean',
    ];

    /**
     * Get the role that owns the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the social accounts for the user.
     */
    public function socialAccounts()
    {
        return $this->hasMany(UserSocialAccount::class);
    }

    /**
     * Get the user tickets.
     */
    public function userTickets()
    {
        return $this->hasMany(UserTicket::class);
    }

    /**
     * Get raffle tickets issued to the user.
     */
    public function raffleTickets()
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Get the transactions for the user.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * Get the support tickets for the user.
     */
    public function supportTickets()
    {
        return $this->hasMany(SupportTicket::class);
    }

    /**
     * Get the audit logs for the user.
     */
    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class);
    }
}
