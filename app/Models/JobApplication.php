<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
protected $fillable = [
'job_id',
'name',
'email',
'resume_path',
// Add any other fields you want to be fillable
];

public function job()
{
return $this->belongsTo(Job::class);
}
}