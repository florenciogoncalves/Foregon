<?php

include_once __DIR__ . "/config.php";

function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


function is_password(string $password): bool
{
    if ($password < CONF_PASSWD_MIN_LEN && $password > CONF_PASSWD_MAX_LEN) {
        return false;
    }
    return true;
}

function filter($input)
{
    return filter_var($input, FILTER_DEFAULT);
}

/**
 * UPLOAD HELPERS
 */


function max_size_allowed($file): bool
{
    /**
     * Tamanho máximo permitido: 3MB
     */

    $convertByteToKB = 0.001 * $file;
    if ($convertByteToKB > 3072) {
        return false;
    }
    return true;
}

function rename_image($file, $name = "FP", int $seconds = 60): string
{
    return $name . " - " . date('Ymd') . time() + $seconds . mb_strstr($file, '.');
}

function createFolder(string $name = 'produtos'): bool
{
    if (is_file(__DIR__ . "/../../_storage/{$name}") || is_dir(__DIR__ . "/../../_storage/{$name}")) {
        return false;
    } else {
        mkdir(__DIR__ . "/../../_storage/{$name}", 0755);
        return true;
    }
}

function uploader($origin, $destination): bool
{

    if (move_uploaded_file($origin, $destination)) {
        return true;
    }
    return false;
}


function generateVerificationCode(): int
{
    return random_int(1000, 9999);
}


function dispatch()
{
    session_destroy();
    header("Location: ../login.php");
    die;
}

function str_limit_words(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numWords = count($arrWords);

    if ($numWords < $limit) {
        return $string;
    }

    $words = implode(" ", array_slice($arrWords, 0, $limit));
    return "{$words}{$pointer}";
}

function hashPassword(string $value): string
{
    return password_hash($value, PASSWORD_DEFAULT);
}

function verifyHash(string $password, $hashUser): bool
{
    return password_verify($password, $hashUser);
}

function codeGenerator(): int
{
    return random_int(10000, 99999);
}

function generateToken()
{
    return sha1(uniqid(mt_rand(), true));
}
function convertToBRL($number)
{
    return number_format($number, 2, ',', '.');
}

function remove(string $file)
{
    unlink(__DIR__ . "/../../_storage/produtos/{$file}");
}
