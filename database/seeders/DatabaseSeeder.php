<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use App\Models\Contributors;
use App\Models\SaCodesWeekends;
use App\Models\Blogs;
use App\Models\Courses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // USER SEEDERS
        // User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com'
        ]);

        $user = User::factory()->create([
            'name' => 'janzen',
            'email' => 'janzen@gmail.com',
            'password' => Hash::make('janzen@gmail.com')
        ]);

        Listing::factory(3)->create([
            'user_id' => $user->id
        ]);

        // CONTRIBUTORS SEEDERS

        // Contributors::factory(3)->create();


        $contributors = Contributors::factory()->create(
            [
                'id' => 1,
                'first_name' => 'Belinda',
                'last_name' => 'Pigome',
                'job_title' => 'Computer Systems Analyst',
                'profile_picture' => 'sacodesweekend-belinda.png',
            ]
        );

        $contributors = Contributors::factory()->create(
            [
                'id' => 2,
                'first_name' => 'Janzen',
                'last_name' => 'Faidiban',
                'job_title' => 'Full-Stack Developer',
                'profile_picture' => 'sacodesweekend-janzen.png',
            ]
        );

        $contributors = Contributors::factory()->create(
            [
                'id' => 3,
                'first_name' => 'Wahyu',
                'last_name' => 'Boseren',
                'job_title' => 'Electronic Enthusiast',
                'profile_picture' => 'sacodesweekend-wahyu.png',
            ]
        );

        // SACODE'S WEEKEND SEEDERS

        // SaCodesWeekends::factory(3)->create([
        //     'contributor_id' => $contributors->id
        // ]);

        SaCodesWeekends::factory()->create([
            'contributor_id' => '1',
            'topic' => 'Cloud Computing : An Introduction to Alibaba Cloud',
            'description' => 'Asperiores accusamus laborum animi quia dolorum et expedita. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'poster' => 'sacodesweekend-belinda.png',
            'date' => '2023-02-04',
            'time' => '18:00',
            'status' => 'active',
        ]);

        SaCodesWeekends::factory()->create([
            'contributor_id' => '2',
            'topic' => 'HTML Template Modification: Free & Premium Templates',
            'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Asperiores accusamus laborum animi quia dolorum et expedita.',
            'poster' => 'sacodesweekend-janzen.png',
            'date' => '2023-02-04',
            'time' => '18:00',
            'status' => 'active',
        ]);

        SaCodesWeekends::factory()->create([
            'contributor_id' => '3',
            'topic' => 'Digital Electronic Design & Simulation on ReTro',
            'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Asperiores accusamus laborum animi quia dolorum et expedita.',
            'poster' => 'sacodesweekend-wahyu.png',
            'date' => '2023-02-04',
            'time' => '18:00',
            'status' => 'trash',
        ]);

        // BLOG
        Blogs::factory()->create([
            'article_title' => 'Introduction HTML',
            'article_content' => 'HTML Lorem ipsum dolor sit amet.',
            'type_content' => 'Basic',
            'article_tags' => 'html, web',
            'status_content' => '0',
            'slug_content' => 'introduction-html',
            'image_content' => 'blog1.png',
        ]);

        Blogs::factory()->create([
            'article_title' => 'Introduction CSS',
            'article_content' => 'CSS Lorem ipsum dolor sit amet.',
            'type_content' => 'Basic',
            'article_tags' => 'css, web',
            'status_content' => '1',
            'slug_content' => 'introduction-css',
            'image_content' => 'blog2.png',
        ]);

        Blogs::factory()->create([
            'article_title' => 'Introduction PHP',
            'article_content' => 'PHP Lorem ipsum dolor sit amet.',
            'type_content' => 'Basic',
            'article_tags' => 'php, web',
            'status_content' => '1',
            'slug_content' => 'introduction-php',
            'image_content' => 'blog2.png',
        ]);




        // COURSES
        Courses::factory(3)->create();


        // Listing::create([
        //     'title' => 'Laarvel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Nokensoft',
        //     'location' => 'Jayapura, Papua.',
        //     'email' => 'berkas@nokensoft.com',
        //     'website' => 'https://nokensoft.com',
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'SaCode',
        //     'location' => 'Kota Jayapura, Papua.',
        //     'email' => 'info@sacode.web.id',
        //     'website' => 'https://sacode.web.id',
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
