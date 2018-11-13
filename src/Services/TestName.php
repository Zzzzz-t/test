<?php
namespace tls\Services;

use tls\Contracts\Test;

class TestName implements Test
{
    public function sendName(string $name)
    {
        return $name;
    }
}

?>