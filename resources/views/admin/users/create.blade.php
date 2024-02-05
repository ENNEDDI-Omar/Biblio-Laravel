<x-app-layout>

    <h1>admin->folder->users->creat</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Créer un Nouvel Utilisateur</h1>
        <form action="{{ route('users.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Adresse Email :</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Mot de passe :</label>
                <input type="password" id="password" name="Password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tel">Téléphone :</label>
                <input type="tel" id="tel" name="tel" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role_id">Rôle :</label>
                <select id="role_id" name="role_id" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline" required>
                    <option value="1">Admin</option>
                    <option value="2">Utilisateur</option>
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer Utilisateur</button>
                <a href="{{ route('users.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuler</a>
            </div>
        </form>
    </div>
    
 
 </x-app-layout>