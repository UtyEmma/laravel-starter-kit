<?php

namespace App\Enums;


enum Status: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case SUSPENDED = 'SUSPENDED';
    case DELETED = 'DELETED';
    case BANNED = 'BANNED';
    case BLOCKED = 'BLOCKED';
    case UNVERIFIED = 'UNVERIFIED';
    case VERIFIED = 'VERIFIED';
    case CONFIRMED = 'CONFIRMED';
    case UNCONFIRMED = 'UNCONFIRMED';
    case PENDING_PAYMENT = 'PENDING_PAYMENT';
    case PENDING_APPROVAL = 'PENDING_APPROVAL';
    case PENDING_CONFIRMATION = 'PENDING_CONFIRMATION';
    case PENDING = 'PENDING';
    case CANCELLED = 'CANCELLED';
}
