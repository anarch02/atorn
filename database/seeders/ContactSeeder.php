<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'social_meadia' => false,
                'icon' => 'las la-phone',
                'key' => 'phone',
                'value' => '+1 234 567 890',
            ],
            [
                'social_meadia' => false,
                'icon' => 'las la-envelope',
                'key' => 'email',
                'value' => 'support@gmail.com',
            ],
            [
                'social_meadia' => false,
                'icon' => 'las la-map-marker',
                'key' => 'address',
                'value' => '123 Street, City, Country',
            ],
            [
                'social_meadia' => true,
                'icon' => 'las la-facebook-f',
                'key' => 'facebook',
                'value' => 'https://facebook.com',
            ],
            [
                'social_meadia' => true,
                'icon' => 'las la-twitter',
                'key' => 'twitter',
                'value' => 'https://twitter.com',
            ],
            [
                'social_meadia' => true,
                'icon' => 'las la-instagram',
                'key' => 'instagram',
                'value' => 'https://instagram.com',
            ],
            [
                'social_meadia' => true,
                'icon' => 'las la-linkedin',
                'key' => 'linkedin',
                'value' => 'https://linkedin.com',
            ],
            [
                'social_meadia' => true,
                'icon' => 'las la-github',
                'key' => 'github',
                'value' => 'https://github.com',
            ],
        ];

        foreach ($contacts as $contact) {
            \App\Models\Contact::create($contact);
        }
    }
}
