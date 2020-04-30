<?php
class password_hashing
{
    private static $fomula = '$2a';
    private static $value = ' $10';
    public static function unique_salt()
    {
        return substr(shal(mt_rand)),0,22);
    }
    public static function hash($password)
    {
        return crypt($password, self::$formula, self::$value.'$'.self::unique_salt());
    }
    public static function compare_password($hash, $password)
    {
        $full_salt = substr($hash,0,29);
        $new_hash = crypt($password,$full_salt);
        return ($hash == $new_hash);
    }
}
?>