<x-app-layout>

    <h1>admin->page->books->show</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Détails du Livre</h1>
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">Titre :</label>
                <input type="text" id="titre" name="titre" value="{{ $book->titre }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="genre">Genre :</label>
                <input type="text" id="genre" name="genre" value="{{ $book->genre }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="date_publication">Date de Publication :</label>
                <input type="date" id="date_publication" name="date_publication" value="{{ $book->date_publication }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="total_copies">Copies Totales :</label>
                <input type="number" id="total_copies" name="total_copies" value="{{ $book->total_copies }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="copies_dispo">Copies Disponibles :</label>
                <input type="number" id="copies_dispo" name="copies_dispo" value="{{ $book->copies_dispo }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Couverture :</label>
                <img src="{{ asset('storage/' . $book->couverture) }}" alt="{{ $book->titre }}" class="w-32 h-32 object-cover">
            </div>
    
            <a href="{{ route('admin.books.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour</a>
        </div>
    </div>
    
 
 </x-app-layout>