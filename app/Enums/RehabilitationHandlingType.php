<?php

namespace App\Enums;

enum RehabilitationHandlingType: string
{
    case Direct = 'direct';
    case Referral = 'referral';
    case Both = 'both';

    public function label(): string
    {
        return match ($this) {
            self::Direct => 'Pelayanan Langsung',
            self::Referral => 'Rujukan',
            self::Both => 'Langsung & Rujukan',
        };
    }
}
