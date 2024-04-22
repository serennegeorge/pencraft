<?php

namespace Tests\Unit;

use App\Models\Writing;
use Tests\TestCase;

class WritingTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Test and unsure that the Get Link returns to the correct Link
     *
     * @return void
     */
    public function testGetLink()
    {
        // Goal: test getLink returns the correct link

        // Action
        $writing = new Writing();

        // Compare the results
        $this->assertEquals('http://localhost/authors/1/writing/1', $writing->getLink(1, 1));
    }

    /**
    * Undocumented function.
     *
     * @return void
     */
    public function testGetImage()
    {
        // Goal: test to ensure getImage returns the correct link for the image
        // Action: create a writing to get the getImage
        $writing = new Writing();
        $writing->image = 'images/media/default.jpg';
        // Compare the results
        $this->assertEquals('http://localhost/storage/images/media/default.jpg', $writing->getImage());
    }

    }
