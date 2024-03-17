<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address'];
  
    public function user()
{
    return $this->belongsTo(User::class);
}

}
// $contact = Contacts::create([
//     'name' => 'John Doe',
//     'email' => 'john@example.com',
//     'password' => bcrypt('secret'),
//     'phone' => '1234567890',
//     'address' => '123 Main St, City'
// ]);
