<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CompanyModelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\CompanyModel');
    }
}
