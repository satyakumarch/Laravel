namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Laptop', 'image' => 'laptop.jpg'],
        2 => ['name' => 'Smartphone', 'image' => 'smartphone.jpg'],
        3 => ['name' => 'Headphones', 'image' => 'headphones.jpg'],
    ];

    // Function to show the product list
    public function index()
    {
        return view('products.index', ['products' => $this->products]);
    }

    // Function to show a single product
    public function show($id)
    {
        if (!isset($this->products[$id])) {
            abort(404); // Show 404 if product not found
        }

        return view('products.show', ['product' => $this->products[$id]]);
    }
}
