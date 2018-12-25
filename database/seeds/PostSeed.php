<?php

use Illuminate\Database\Seeder;
use charmfarmer\Post;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Post::insert([
          [
              'id'             => 1,
              'title'          => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'text'           => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'filename'       => 'placeholder.png',
              'link'           => 'https://www.instagram.com/martijn_vanginkel/',
              'created_at'     => NULL,
              'updated_at'     => NULL,
              'deleted_at'     => NULL,
          ],
          [
              'id'             => 2,
              'title'          => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'text'           => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'filename'       => 'placeholder.png',
              'link'           => 'https://www.instagram.com/martijn_vanginkel/',
              'created_at'     => NULL,
              'updated_at'     => NULL,
              'deleted_at'     => NULL,
          ],
          [
              'id'             => 3,
              'title'          => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'text'           => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'filename'       => 'placeholder.png',
              'link'           => 'https://www.instagram.com/martijn_vanginkel/',
              'created_at'     => NULL,
              'updated_at'     => NULL,
              'deleted_at'     => NULL,
          ],
      ]);
    }
}
