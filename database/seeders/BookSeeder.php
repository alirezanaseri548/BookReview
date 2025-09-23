use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['title' => 'First Book', 'author' => 'John Doe']);
        Book::create(['title' => 'Second Book', 'author' => 'Jane Doe']);
    }
}
