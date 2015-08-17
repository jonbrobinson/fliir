<?php
/**
 * Created by PhpStorm.
 * User: Jonbrobinson
 * Date: 8/16/15
 * Time: 6:07 PM
 */

namespace tests\Fliir\unit\Services\Events;


use App\Fliir\Services\Events\EventRepository;
use TestCase;

class EventsRepositoryTest extends TestCase
{
    protected $eventsRepository;


    public function setUp()
    {
        parent::setUp();
        $this->eventsRepository = new EventRepository();
    }

    public function testEvents()
    {
        $status = $this->eventsRepository->yes();

        $this->assertTrue($status);
    }
}