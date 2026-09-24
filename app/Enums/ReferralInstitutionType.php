<?php

namespace App\Enums;

enum ReferralInstitutionType: string
{
    case Panti = 'panti';
    case Balai = 'balai';
    case Hospital = 'RS';
    case Lks = 'LKS';

    public function label(): string
    {
        return match ($this) {
            self::Panti => 'Panti Sosial',
            self::Balai => 'Balai Rehabilitasi',
            self::Hospital => 'Rumah Sakit',
            self::Lks => 'Lembaga Kesejahteraan Sosial (LKS)',
        };
    }
}
