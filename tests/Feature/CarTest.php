<?php

namespace Tests\Feature;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_store_car(){
        $car = Car::factory()->make()->toArray();
        $response = $this->post('/car', $car);
        $this->assertDatabaseHas(
            'car',
            [
                'mesin'     => $car['mesin'],
                'penumpang' => $car['penumpang'],
                'tipe'      => $car['tipe'],
                'tahun'     => $car['tahun'],
                'warna'     => $car['warna'],
                'harga'     => $car['harga']
            ]
        );
    }

}
