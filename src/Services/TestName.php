<?php
namespace tls\Services;

use tlsss\Contracts\Test;

class TestName implements Test
{
    public function sendName(string $name)
    {
        return $name;
    }
}

?>