<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Cek;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CekTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Cek::class)
            ->assertStatus(200);
    }
}
