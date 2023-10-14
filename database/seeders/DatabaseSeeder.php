<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

     /** create many Teams model manually */
     Team::factory()->createMany([
        [
           'name' => 'Atlanta Reign',
           'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'atlanta-reign' .'.svg',
           'slug' => 'atlanta-reign',
        ],
        [
            'name' => 'Boston Uprising',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'boston-uprising' .'.svg',
            'slug' => 'boston-uprising',
        ],
        [
            'name' => 'Chengdu Hunters',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'chengdu-hunters' .'.svg',
            'slug' => 'chengdu-hunters',
        ], [
            'name' => 'Dallas Fuel',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'dallas-fuel' .'.svg',
            'slug' => 'dallas-fuel',
        ], [
            'name' => 'Florida Mayhem',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'florida-mayhem' .'.svg',
            'slug' => 'florida-mayhem',
        ],
        [
            'name' => 'Guangzhou Charge',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'guangzhou-charge' .'.svg',
            'slug' => 'guangzhou-charge',
        ],
        [
            'name' => 'Hangzhou Spark',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'hangzhou-spark' .'.svg',
            'slug' => 'hangzhou-spark',
        ],
        [
            'name' => 'Houston Outlaws',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'houston-outlaws' .'.svg',
            'slug' => 'houston-outlaws',
        ],
        [
            'name' => 'London Spitfire',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'london-spitfire' .'.svg',
            'slug' => 'london-spitfire',
        ],
        [
            'name' => 'Los Angeles Gladiators',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'los-angeles-gladiators' .'.svg',
            'slug' => 'los-angeles-gladiators',
        ],
        [
            'name' => 'Los Angeles Valiant',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'los-angeles-valiant' .'.svg',
            'slug' => 'los-angeles-valiant',
        ],
        [
            'name' => 'New York Excelsior',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'new-york-excelsior' .'.svg',
            'slug' => 'new-york-excelsior',
        ],
        [
            'name' => 'Paris Eternal',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'paris-eternal' .'.svg',
            'slug' => 'paris-eternal',
        ],
        [
            'name' => 'Philadelphia Fusion',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'philadelphia-fusion' .'.svg',
            'slug' => 'philadelphia-fusion',
        ],
        [
            'name' => 'San Francisco Shock',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'san-francisco-shock' .'.svg',
            'slug' => 'san-francisco-shock',
        ],
        [
            'name' => 'Seoul Dynasty',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'seoul-dynasty' .'.svg',
            'slug' => 'seoul-dynasty',
        ],
        [
            'name' => 'Shanghai Dragons',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'shanghai-dragons' .'.svg',
            'slug' => 'shanghai-dragons',
        ],
        [
            'name' => 'Toronto Defiant',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'toronto-defiant' .'.svg',
            'slug' => 'toronto-defiant',
        ],
        [
            'name' => 'Vancouver Titans',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'vancouver-titans' .'.svg',
            'slug' => 'vancouver-titans',
        ],
        [
            'name' => 'Washington Justice',
            'logo' => 'https://pickem-cdn.overwatchleague.com/teams/'. 'washington-justice' .'.svg',
            'slug' => 'washington-justice',
        ],
        ]);
         Event::factory()->count(4)->create();
    }
}
