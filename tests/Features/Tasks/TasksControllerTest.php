<?php

namespace codicastudio\Novacron\Tests\Features\Tasks;

use codicastudio\Novacron\NovaCron;
use codicastudio\Novacron\Tests\TestCase;

class TasksControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $response = $this
            ->get(route('studio.novacron.tasks'));

        $response->assertSuccessful();
    }
}
