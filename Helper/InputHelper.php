<?php

// Mendefinisikan namespace Helper
namespace Helper;

// Membuat class InputHelper untuk membantu mengambil input dari user
class InputHelper
{
    // Fungsi static untuk mengambil input dari user dengan pesan tertentu
    public static function input(string $info): string
    {
        echo "$info : ";
        $result = fgets(STDIN);
        return trim($result);
    }
}