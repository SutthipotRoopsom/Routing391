import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <div className="bg-gray-100 min-h-screen p-4">
            <h1 className="text-center text-2xl font-bold text-gray-800 mb-6">Product</h1>
            <div className="max-w-4xl mx-auto bg-white shadow-md rounded-lg">
                <ul className="divide-y divide-gray-200">
                    {products.map((product) => (
                        <li key={product.id} className="p-4 hover:bg-gray-50 flex items-center space-x-4">
                            {/* รูปภาพสินค้า */}
                            <img
                                src={product.image}
                                alt={product.name}
                                className="w-16 h-16 rounded object-cover"
                            />
                            {/* รายละเอียดสินค้า */}
                            <Link
                                href={`/products/${product.id}`}
                                className="text-lg font-medium text-blue-600 hover:underline flex-1 flex justify-between"
                            >
                                <span>{product.name}</span>
                                <span className="text-gray-700">${product.price}</span>
                            </Link>
                        </li>
                    ))}
                </ul>
            </div>
        </div>
    );
}
