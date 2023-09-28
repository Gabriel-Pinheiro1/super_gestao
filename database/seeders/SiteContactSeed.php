<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContact;
use Carbon\Factory;
use Database\Factories\SiteContactFacFactory;

class SiteContactSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$contact = new SiteContact();
        $contact->name = 'Super gestão';
        $contact->phone = '85997245197';
        $contact->email = 'supergestao@sg.com';
        $contact->contact_reason = 1;
        $contact->message = 'loremloremloremloremloremloremloremloremloremlorem';
        $contact->save();*/

        SiteContact::factory()->count(100)->create();
    }
}
