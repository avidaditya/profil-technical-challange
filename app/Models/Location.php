<?php

namespace App\Models;

use App\Enums\LocationStatusEnum;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'content_data' => AsCollection::class,
    ];

    public static $statusLabel = [
        LocationStatusEnum::Active => 'Aktif',
        LocationStatusEnum::Inactive => 'Tidak Aktif',
    ];

    /**
     * Get status label.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function statusLabel(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => self::$statusLabel[$attributes['status']],
        );
    }
}
