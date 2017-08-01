<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        $m1 = factory(Menu::class)->create([
            'name' => 'Opción 1',
            'slug' => 'opcion1',
            'parent' => 0,
            'order' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 2',
            'slug' => 'opcion2',
            'parent' => 0,
            'order' => 1,
        ]);
        $m3 = factory(Menu::class)->create([
            'name' => 'Opción 3',
            'slug' => 'opcion3',
            'parent' => 0,
            'order' => 2,
        ]);
        $m4 = factory(Menu::class)->create([
            'name' => 'Opción 4',
            'slug' => 'opcion4',
            'parent' => 0,
            'order' => 3,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 1.1',
            'slug' => 'opcion-1.1',
            'parent' => $m1->id,
            'order' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 1.2',
            'slug' => 'opcion-1.2',
            'parent' => $m1->id,
            'order' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 3.1',
            'slug' => 'opcion-3.1',
            'parent' => $m3->id,
            'order' => 0,
        ]);
        $m32 = factory(Menu::class)->create([
            'name' => 'Opción 3.2',
            'slug' => 'opcion-3.2',
            'parent' => $m3->id,
            'order' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 4.1',
            'slug' => 'opcion-4.1',
            'parent' => $m4->id,
            'order' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 3.2.1',
            'slug' => 'opcion-3.2.1',
            'parent' => $m32->id,
            'order' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 3.2.2',
            'slug' => 'opcion-3.2.2',
            'parent' => $m32->id,
            'order' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => 'Opción 3.2.3',
            'slug' => 'opcion-3.2.3',
            'parent' => $m32->id,
            'order' => 2,
        ]);
    }
}
