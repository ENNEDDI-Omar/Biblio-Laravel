<x-app-layout>

    <h1>admin->page->books->edit</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Modifier le Livre</h1>
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">Titre :</label>
                    <input type="text" id="titre" name="titre" value="{{ $book->titre }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="genre">Genre :</label>
                    <input type="text" id="genre" name="genre" value="{{ $book->genre }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="date_publication">Date de Publication :</label>
                    <input type="date" id="date_publication" name="date_publication" value="{{ $book->date_publication }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="total_copies">Copies Totales :</label>
                    <input type="number" id="total_copies" name="total_copies" value="{{ $book->total_copies }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="copies_dispo">Copies Disponibles :</label>
                    <input type="number" id="copies_dispo" name="copies_dispo" value="{{ $book->copies_dispo }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="couverture">Nouvelle Couverture :</label>
                    <input type="file" id="couverture" name="couverture" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
    
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
                    <a href="{{ route('admin.books.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuler</a>
                </div>
            </form>
        </div>
    </div>
    
 
 </x-app-layout>