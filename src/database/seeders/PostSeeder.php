<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $posts = [
    //         [
    //             'title' => 'Laravel Scout with Elasticsearch',
    //             'content' => 'Learn how to integrate Laravel Scout with Elasticsearch easily.'
    //         ],
    //         [
    //             'title' => 'Docker setup for Elasticsearch',
    //             'content' => 'A simple guide to running Elasticsearch in Docker for development.'
    //         ],
    //         [
    //             'title' => 'Full-text search made simple',
    //             'content' => 'Elasticsearch provides a powerful search engine for your Laravel apps.'
    //         ],
    //         [
    //             'title' => 'Speed up search queries',
    //             'content' => 'Using Elasticsearch drastically improves search performance in large datasets.'
    //         ],
    //     ];

    //     foreach ($posts as $post) {
    //         Post::create($post);
    //     }
    // }

    public function run(): void
    {
        Post::withoutSyncingToSearch(function () {
            Post::insert([
                ['title' => 'Laravel Scout with Elasticsearch', 'content' => 'Learn how to integrate Laravel Scout with Elasticsearch easily.'],
                ['title' => 'Docker setup for Elasticsearch', 'content' => 'A simple guide to running Elasticsearch in Docker for development.'],
                ['title' => 'Full-text search made simple', 'content' => 'Elasticsearch provides a powerful search engine for your Laravel apps.'],
                ['title' => 'Speed up search queries', 'content' => 'Using Elasticsearch drastically improves search performance in large datasets.'],
            ]);
        });
    }
}
