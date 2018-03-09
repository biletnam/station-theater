<?php

namespace App\Type;

use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class RoleType extends StringType {
    const CAST = "1";
    const CREW = "2";

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $value = parent::convertToDatabaseValue($value, $platform);
        if (!in_array($value, [self::CAST, self::CREW])) {
            throw new \InvalidArgumentException("Invalid Role Type");
        }
        return $value;
    }

    public function getName()
    {
        return 'role';
    }

    public static function getChoices() {
        return [
            "Cast" => self::CAST,
            "Crew" => self::CREW
        ];
    }
}