<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
                'name'=>'Juan Ramirez',
                'email' => 'admin@admin.cl'
            ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Juan Ramirez')
            ->see('admin@admin.cl');

    }
}
