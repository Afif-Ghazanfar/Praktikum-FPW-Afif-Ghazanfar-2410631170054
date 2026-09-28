<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    protected $fillable = ['category_id', 'code', 'name', 'unit', 'price', 'stock'];
 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('master-data.product.create', compact('categories'));
    }
    
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
    
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }


}

