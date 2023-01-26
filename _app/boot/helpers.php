<?php

include_once __DIR__ . "/config.php";

/**
 * @param string $email
 * @return boolean
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $password
 * @return boolean
 */
function is_password(string $password): bool
{
    if ($password < CONF_PASSWD_MIN_LEN && $password > CONF_PASSWD_MAX_LEN) {
        return false;
    }
    return true;
}
/**
 * @param [type] $input
 * @return void
 */
function filter($input)
{
    return filter_var($input, FILTER_DEFAULT);
}

/**
 * UPLOAD HELPERS
 */

/**
 * @param [type] $file
 * @return boolean
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
/**
 * @param [type] $file
 * @param [type] $name
 * @param integer $seconds
 * @return string
 */
function rename_image($file, $name, int $seconds = 60): string
{
    return $name . " - " . date('Ymd') . time() + $seconds . mb_strstr($file, '.');
}
/**
 * @param string $name
 * @return boolean
 */
function createFolder(string $name = 'produtos'): bool
{
    if (is_file(__DIR__ . "/../../_storage/{$name}") || is_dir(__DIR__ . "/../../_storage/{$name}")) {
        return false;
    } else {
        mkdir(__DIR__ . "/../../_storage/{$name}", 0755);
        return true;
    }
}
/**
 * @param [type] $origin
 * @param [type] $destination
 * @return boolean
 */
function uploader($origin, $destination): bool
{

    if (move_uploaded_file($origin, $destination)) {
        return true;
    }
    return false;
}

/**
 * @return integer
 */
function generateVerificationCode(): int
{
    return random_int(10000, 99999);
}

/**
 * @return void
 */
function dispatch()
{
    session_destroy();
    header("Location: ../login.php");
    die;
}
/**
 * @param string $string
 * @param integer $limit
 * @param string $pointer
 * @return string
 */
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

/**
 * @param string $value
 * @return string
 */
function hashPassword(string $value): string
{
    return password_hash($value, PASSWORD_DEFAULT);
}

/**
 * @param string $password
 * @param [type] $hashUser
 * @return boolean
 */
function verifyHash(string $password, $hashUser): bool
{
    return password_verify($password, $hashUser);
}

/**
 * @param [type] $number
 * @return void
 */
function convertToBRL($number)
{
    return number_format($number, 2, ',', '.');
}

/**
 * @param string $file
 * @return void
 */
function remove(string $file)
{
    unlink(__DIR__ . "/../../_storage/produtos/{$file}");
}

/**
 * @param string $string
 * @return string
 */
function formatDate(string $string): string
{
    return mb_strcut($string, 0, 10);
}

/**
 * @param string $string
 * @return string
 */
function formatHours(string $string): string
{
    return mb_strcut($string, 10, 6);
}

/**
 * @param string $time
 * @return string
 */
function getHour(string $time): string
{
    return mb_strcut($time, 0, 5);
}
/**
 * @param string $cpf
 * @return boolean
 */
function is_cpf($cpf)
{
    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}
