<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    function __construct($todo = null)
    {
        $this->todo = $todo;
    }
}
