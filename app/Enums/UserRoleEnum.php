<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Superadmin()
 * @method static static Admin()
 * @method static static Editor()
 * @method static static Moderator()
 * @method static static Member()
 */
final class UserRoleEnum extends Enum
{
    public const Superadmin = 'superadmin';
    public const Admin = 'admin';
    public const Editor = 'editor';
    public const Moderator = 'moderator';
    public const Member = 'member';
}
