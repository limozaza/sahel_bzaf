<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 01:50
 */

namespace App\Domain\Models;


class User
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $email;
    /**
     * @var array
     */
    private $roles;

    /**
     * User constructor.
     * @param $username
     * @param $email
     * @param $roles
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->roles[] = 'ROLE_USER';
    }


}