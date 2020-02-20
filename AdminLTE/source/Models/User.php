<?php

namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
  /**
   * @var string|null
   */

  public function __construct()
    {
        parent::__construct("users", ["username", "passwd"]);
    }
}
