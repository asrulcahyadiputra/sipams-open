<?php

namespace Database\Seeders;

use App\Models\UserGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'group_id'      => 'G-01',
                'group_name'    => 'Super Admin',
                'desc'          => 'Super Admin'
            ],
            [
                'group_id'      => 'G-02',
                'group_name'    => 'Bendahara',
                'desc'          => 'Bendahara'
            ],
            [
                'group_id'      => 'G-03',
                'group_name'    => 'Sekretaris',
                'desc'          => 'Sekretaris',
            ],
            [
                'group_id'      => 'G-04',
                'group_name'    => 'Ketua',
                'desc'          => 'Ketua',
            ],
        ];

        foreach ($groups as $groups) {
            UserGroup::create($groups);
        }
    }
}
