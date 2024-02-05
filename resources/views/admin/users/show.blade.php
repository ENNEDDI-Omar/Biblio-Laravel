
<x-app-layout>

    <h1>admin->page->users->show</h1>

    
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Détails de l'Utilisateur</h1>
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom :</label>
                <p id="nom">{{ $user->nom }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">Prénom :</label>
                <p id="prenom">{{ $user->prenom }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Adresse Email :</label>
                <p id="email">{{ $user->email }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tel">Téléphone :</label>
                <p id="tel">{{ $user->tel }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role_id">Rôle :</label>
                <p id="role_id">{{ $user->role->nom }}</p>
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour</a>
            </div>
        </div>
    </div>
    
 
 </x-app-layout>