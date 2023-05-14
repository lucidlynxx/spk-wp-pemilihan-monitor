<?php

namespace Tests\Feature;

use App\Models\SubKriteria6;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubKriteria6Test extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_user_can_access_edit_sub_kriteria6()
    {
        $user = User::factory()->create();
        $data_sub_kriteria6 = SubKriteria6::first();

        $response = $this->actingAs($user)->get('/dashboard/data-sub-kriteria6/' . $data_sub_kriteria6->slug . '/edit');

        $response->assertStatus(200);
        $response->assertSee('Ubah Kriteria Color Gamut (C7)', $data_sub_kriteria6->colorGamut);
    }

    public function test_auth_user_can_access_update_sub_kriteria6()
    {
        $user = User::factory()->create();

        $data_sub_kriteria6 = SubKriteria6::first();

        $this->assertCount(5, SubKriteria6::all());
        $response = $this->actingAs($user)->put('/dashboard/data-sub-kriteria6/' . $data_sub_kriteria6->slug, [
            'user_id' => $user->id,
            'colorGamut' => 'NTSC 72%',
            'slug' => 'c7-subkriteria',
            'nColorGamut' => 5,
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/dashboard/data-sub-kriteria');
        $this->assertEquals(5, SubKriteria6::first()->nColorGamut);
    }
}
