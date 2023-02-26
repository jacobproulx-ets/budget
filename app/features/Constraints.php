<?php

namespace App\features;

use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Unique;
use Symfony\Component\Validator\Constraints as Assert;


class Constraints
{

    public static function NotBlank(array $array = []): NotBlank
    {
        return new NotBlank(array_merge([
            "message" => "Ce champs est obligatoire",
        ], $array));
    }

    // eg.: ['choices' => ['fiction', 'non-fiction']]
    public static function Choice(array $array): Choice
    {
        return new Choice(array_merge([
            "message" => "Cette valeur ne fait pas partie des choix",
        ], $array));
    }

    public static function Length(array $array): Length
    {
        return new Length(array_merge([
            'min' => 2,
            'max' => 50,
            'minMessage' => 'Ce champ doit avoir au moins {{ limit }} caractères',
            'maxMessage' => 'Ce champ ne peut pas contenir plus de {{ limit }} caractères',
        ], $array));
    }

    public static function Range(array $array): Range
    {
        return new Range(array_merge([
            'min' => 0,
            'max' => PHP_INT_MAX,
            'notInRangeMessage' => 'Cette valeur doit être entre {{ min }} et {{ max }}',
        ], $array));
    }

    public static function DateTime(array $array = []): DateTime
    {
        return new DateTime(array_merge([
            'message' => "{{ value }} n'est pas une date valide",
        ], $array));
    }

    public static function Email(array $array = []): Email
    {
        return new Email(array_merge([
            'message' => 'Le courriel "{{ value }}" n\'est pas valide.',
        ], $array));
    }

    public static function Regex(array $array = []): Regex
    {
        return new Regex($array);
    }




}
