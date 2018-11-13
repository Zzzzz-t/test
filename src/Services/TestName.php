<?php
namespace tlsss\test\Services;

use tlsss\test\Contracts\Test;

class TestName implements Test
{
    public function sendName(string $name)
    {
        return $name;
    }
}

?>