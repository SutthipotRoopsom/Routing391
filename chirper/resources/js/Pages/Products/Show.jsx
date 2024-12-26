import { Link } from '@inertiajs/react';

export default function Show({ product }) {
    return (
        <div className="min-h-screen bg-gray-100 flex items-center justify-center p-6">
            <div className="max-w-md w-full bg-white shadow-lg rounded-lg p-6">
                <img
                    src={product.image}
                    alt={product.name}
                    className="w-full h-64 object-cover rounded-t-lg mb-4"
                />
                <h1 className="text-2xl font-bold text-gray-800 mb-4">{product.name}</h1>
                <p className="text-gray-600 mb-4">{product.description}</p>
                <p className="text-lg font-semibold text-gray-700 mb-6">Price: ${product.price}</p>
                <Link
                    href="/products"
                    className="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700"
                >
                    Back to All Products
                </Link>
            </div>
        </div>
    );
}
