<?php

namespace Tests\Feature;

use App\Models\Department;
use App\Models\Position;
use App\Models\Worker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase

{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_workers_index()
    {
        $response = $this->get('/api/workers');

        $response->assertStatus(200);
    }

    public function test_workers_show()
    {
        Department::factory()->create([
            'title' => fake()->jobTitle
        ]);
        Position::factory()->create([
            'title' => fake()->jobTitle,
            'department_id' => Department::inRandomOrder()->first()->id,
        ]);
        $user = Worker::factory()->create([
            'name' => 'Shon',
            'surname' => 'Bin',
            'age' => '55',
            'email' => 'shon@bin',
            'position_id' => Position::inRandomOrder()->first()->id,

        ]);
        $response = $this->get('/api/workers/1');

        $response->assertStatus(200);
        $response->assertJsonPath('data.name', $user->name);
    }

    public function test_workers_store()
    {
        $response = $this->post('api/workers', [
            'name' => 'name',
            'surname' => 'surname',
            'age' => 22,
            'email' => 'email',
        ]);

        $response->assertJsonPath('data.name', 'name');
        $this->assertDatabaseCount('workers', 26);
        $this->assertDatabaseHas('workers', [
            'name' => 'name',
        ]);

    }

    public function test_workers_delete()
    {
        $this->assertDatabaseHas('workers', [
            'id' => '1',
        ]);
        $this->delete('api/workers/1');
        $this->assertDatabaseMissing('workers', [
            'id' => '1',
        ]);

    }
}
