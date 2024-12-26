<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;


class ProductController extends Controller
{

    private $products = [
        [
            'id' => 1,
            'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'image' => 'https://media-cdn.bnn.in.th/342471/Microsoft-Surface-Laptop-Go3-i5---------1-square_medium.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'image' => 'https://www.jib.co.th/img_master/product/original/2024090215504870311_1.jpg',
        ],
        [
            'id' => 3,
            'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'image' => 'https://speedcom.co.th/cdn/shop/files/lenovo-tab-m11-tb-330xu-zadb0094th-mediatek-helio-g88-luna-grey-speedcom-1_700x700.png?v=1720550418',
        ],
        [
            'id' => 4,
            'name' => 'Smartwatch',
            'description' => 'Stylish smartwatch with fitness tracking',
            'price' => 200,
            'image' => 'https://storage.remaxthailand.co.th/img.php?src=img/product/D2301150/1.jpg',
        ],
        [
            'id' => 5,
            'name' => 'Headphones',
            'description' => 'Noise-canceling headphones for immersive sound',
            'price' => 300,
            'image' => 'https://mediam.dotlife.store/media/catalog/product/cache/3b7e899159f673788675d87d1d929a98/s/o/sony_audio_wh-ch520_over-ear_headphone_-_black.001.jpeg',
        ],
        [
            'id' => 6,
            'name' => 'Gaming Console',
            'description' => 'Next-gen gaming console for ultimate gaming experience',
            'price' => 600,
            'image' => 'https://www.jib.co.th/img_master/product/original/2024013009372365124_1.jpg',
        ],
        [
            'id' => 7,
            'name' => 'Camera',
            'description' => 'DSLR camera with high-resolution imaging',
            'price' => 1200,
            'image' => 'https://i5.walmartimages.com/seo/Canon-EOS-4000D-DSLR-Camera-EF-S-18-55-mm-f-3-5-5-6-III-Lens_7446dc1e-5d9f-4943-be75-5d17eee9db8d_1.426f180a993ce5c99f3e318f8b086f30.jpeg',
        ],
        [
            'id' => 8,
            'name' => 'Wireless Speaker',
            'description' => 'Portable wireless speaker with powerful sound',
            'price' => 150,
            'image' => 'https://www.tohome.com/images/Products/500/17122021/RS-XG500-01.jpg',
        ],
        [
            'id' => 9,
            'name' => 'Monitor',
            'description' => '4K UHD monitor for professional use',
            'price' => 400,
            'image' => 'https://mediam.dotlife.store/media/catalog/product/cache/3b7e899159f673788675d87d1d929a98/c/u/curved_gaming_monitor_g34wqi.002.jpeg',
        ],
        [
            'id' => 10,
            'name' => 'Keyboard',
            'description' => 'Mechanical keyboard with customizable keys',
            'price' => 100,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6gmZGHtgzjpWllp95OcVMdQ030_Qe-HrU6A&s',
        ],
    ];





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
        abort(404, 'Product not found');
    }
        return Inertia::render('Products/Show', ['product' => $product]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
