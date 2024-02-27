<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PageNameEnums: string implements HasLabel
{
    case HOME = 'Home';
    case SERVICES = 'Services';
    case CONTACT = 'Contact';
    case COMPANY_OVERVIEW = 'Company Overview';
    case COMPANY_MILESTONE = 'Company Milestone';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::SERVICES => 'Services',
            self::CONTACT => 'Contact',
            self::COMPANY_OVERVIEW => 'Company Overview',
            self::COMPANY_MILESTONE => 'Company Milestone',
        };
    }
}
