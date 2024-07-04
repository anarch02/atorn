<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => [
                    'en' => 'Civil<span> Law</span>',
                    'ru' => 'Гражданское<span> право</span>',
                ],
                'description' => [
                    'en' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.',
                    'ru' => 'С другой стороны, мы отвергаем с праведным негодованием и не любим мужчин, которые так обольщены и деморализованы очарованием удовольствия настоящего момента, так ослеплены желанием.',
                ],
                'icon' => 'las la-city',
            ],
            [
                'name' => [
                    'en' => 'Investment<span> Law</span>',
                    'ru' => 'Инвестиционное<span> право</span>',
                ],
                'description' => [
                    'en' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.',
                    'ru' => 'С другой стороны, мы отвергаем с праведным негодованием и не любим мужчин, которые так обольщены и деморализованы очарованием удовольствия настоящего момента, так ослеплены желанием.',
                ],
                'icon' => 'las la-balance-scale',
            ],
            [
                'name' => [
                    'en' => 'Cyber<span> Law</span>',
                    'ru' => 'Кибер<span> право</span>',
                ],
                'description' => [
                    'en' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.',
                    'ru' => 'С другой стороны, мы отвергаем с праведным негодованием и не любим мужчин, которые так обольщены и деморализованы очарованием удовольствия настоящего момента, так ослеплены желанием.',
                ],
                'icon' => 'las la-broadcast-tower',
            ],
            [
                'name' => [
                    'en' => 'Education<span> Law</span>',
                    'ru' => 'Образовательное<span> право</span>',
                ],
                'description' => [
                    'en' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.',
                    'ru' => 'С другой стороны, мы отвергаем с праведным негодованием и не любим мужчин, которые так обольщены и деморализованы очарованием удовольствия настоящего момента, так ослеплены желанием.',
                ],
                'icon' => 'las la-balance-scale-left',
            ],
            [
                'name' => [
                    'en' => 'Business<span> Law</span>',
                    'ru' => 'Бизнес<span> право</span>',
                ],
                'description' => [
                    'en' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.',
                    'ru' => 'С другой стороны, мы отвергаем с праведным негодованием и не любим мужчин, которые так обольщены и деморализованы очарованием удовольствия настоящего момента, так ослеплены желанием.',
                ],
                'icon' => 'las la-user-tie',
            ],
            [
                'name' => [
                    'en' => 'Family<span> Law</span>',
                    'ru' => 'Семейное<span> право</span>',
                ],
                'description' => [
                    'en' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.',
                    'ru' => 'С другой стороны, мы отвергаем с праведным негодованием и не любим мужчин, которые так обольщены и деморализованы очарованием удовольствия настоящего момента, так ослеплены желанием.',
                ],
                'icon' => 'las la-users',
            ],
        ];


        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}
