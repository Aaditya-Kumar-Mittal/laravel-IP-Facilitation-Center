<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPR extends Model
{
    use HasFactory;
    
    protected $table = 'iprs';

    // यह बताता है कि कौन-कौन से fields mass assign किए जा सकते हैं
    protected $fillable = [
        'title',
        'description',
        'type',
        'application_date',
        'user_id' // 🔥 नया field जोड़ा
    ];

    // User से relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
