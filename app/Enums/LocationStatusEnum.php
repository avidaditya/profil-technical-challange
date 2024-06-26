<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Active()
 * @method static static Inactive()
 */
final class LocationStatusEnum extends Enum
{
    public const Active = 'active';
    public const Inactive = 'inactive';
}
