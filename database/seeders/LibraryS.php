<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibraryS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('libraries')->truncate();
        DB::table('libraries')->insert([
            [
                'bookId' => 1,
                'authorId' => 2,
                'title' => 'Oneness with all life: Inspirational selections 1',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 2,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 2',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 3,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 3',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 4,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 4',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 5,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 5',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 6,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 6',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 7,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 7',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 8,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 8',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 9,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 9',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 10,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections 10',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],
        ]);

    }
}
