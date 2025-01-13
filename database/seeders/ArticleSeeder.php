<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role_id', '!=', 1)->inRandomOrder()->take(10)->get();

        if ($users->isEmpty()) {
            $this->command->warn('Tidak ada user ditemukan!');
            return;
        }

        $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. 
        Nulla vitae elit libero, a pharetra augue. Donec sagittis euismod purus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at cursus nec, luctus a elit. Donec aliquet, tortor nec commodo ultricies, velit est dapibus augue, eu sollicitudin erat justo sit amet nulla. 
        Nullam sit amet nisi condimentum erat iaculis auctor. Integer aliquet, massa id tincidunt lobortis, nisi nisl lacinia mi, at mattis nulla metus eu arcu. Vivamus augue turpis, euismod sit amet malesuada sed, volutpat vel nunc. Nulla facilisi. Curabitur in libero ut massa volutpat convallis. 
        Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.
        Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.";

        foreach ($users as $user) {
            foreach (range(1, 10) as $index) {
                Article::create([
                    'created_by' => $user->id,
                    'title' => 'Artikel ' . $index,
                    'content' => $index . $loremIpsum,
                ]);
            }
        }
    }
}
