<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case open = 'Aceitando propostas';
    case closed = 'Encerrado';

    public static function label(string $name): string
    {
        foreach(self::cases() as $status){
            if($name === $status->name){
                return $status->value;
            }
        }
        throw new \ValueError("O status {$name} não é válido.");

    }

   
}

