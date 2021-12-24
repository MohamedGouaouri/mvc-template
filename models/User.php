<?php


class User extends Model
{
    private static $table_name = "users";
    private string $username;
    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public static function all()
    {
        // TODO: Implement all() method.
        return DB::query("SELECT * FROM " . self::$table_name);
    }
}