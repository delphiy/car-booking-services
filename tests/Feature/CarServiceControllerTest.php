<?php

namespace Tests\Feature;

use App\BookingDate;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CarServiceControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testUnauthenticatedUsersShouldNotAbleToInsertCarService()
    {
        $newData = [
            'name' => 'New Car Service'
        ];
        $response = $this->json('post', '/api/car-service', $newData);

        $response->assertStatus(401);
        $this->assertDatabaseMissing('car_services', $newData);
    }

    public function testUnauthenticatedUsersShouldNotAbleToDeleteCarService()
    {
        $response = $this->json('delete', '/api/car-service/1');

        $response->assertStatus(401);
        $this->assertDatabaseHas('car_services', [
            'name' => 'Oil change'
        ]);
    }

    public function testItShouldNotIncludeUnavaiableMechanic() {
        BookingDate::create([
            'booking_date' => '2021-08-15',
            'mechanic_id' => 2
        ]);

        $response = $this->get('/api/car-service/mechanic-availabilities/2021-08-15');

        $response->assertJsonMissing(['id' => 2]);
    }
}
