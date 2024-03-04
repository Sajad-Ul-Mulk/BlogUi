<?php

namespace App\Models;

use App\Models\Scopes\DraftScope;
use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;



#[ScopedBy([DraftScope::class])]
class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected function cover():Attribute
    {
        return Attribute::make(
          get: fn (string $cover)=> Storage::url($cover),
        );
    }
//    protected $casts = [
//        'created_at' => 'datetime:Y-m-d',
//    ];
    protected function title():Attribute
    {
        return Attribute::make(
            get: fn(string $title)=> ucwords($title),
        );
    }
    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn(string $slug)=> ucwords($slug),
        );
    }
    protected function body():Attribute
    {
        return Attribute::make(
            get: fn(string $body)=> ucwords($body),
        );
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
