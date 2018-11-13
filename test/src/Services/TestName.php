<?php
namespace tls\test\Services;

use tls\test\Contracts\Test;

class TestName implements Test
{
    public function sendName(string $name)
    {
        return $name;
    }
}

?>