<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id', 'title', 'company', 'description', 'location',
        'website', 'email', 'tags', 'logo'
    ]; // Another method to unguard mass assignment
    // is by going to AppServiceProvider.php and then
    // under public function boot() add model::unguard();
    // make sure you import the model class. But make sure that
    // you know what is going into the database.

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')

                ->orWhere('description', 'like', '%' . request('search') . '%')

                ->orWhere('tags', 'like', '%' . request('search') . '%')

                ->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
