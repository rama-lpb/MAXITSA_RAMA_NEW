   <div class="bg-gradient-to-r from-orange-400 to-orange-500 px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="/images/uploads/logb.png" alt="logo" class="w-17 h-14  rounded mr-1"> 
                <span class="font-bold text-white text-2xl">MAXITSA</span> 
            </div>
            <!-- Barre de recherche -->
            <div class="flex-1 max-w-md mx-8">
                <input type="text" placeholder="Rechercher..." class="bg-white rounded-xl px-4 py-3 w-full focus:outline-none" />
            </div>
            <!-- Profil utilisateur -->
            <div class="flex items-center gap-2">
                <img src="/images/uploads/avatar.jpg" alt="avatar" class="w-12 h-12 rounded-full object-cover border-2 border-orange-400"> <!-- Avatar plus grand -->
                <select class="bg-white border border-gray-300 rounded px-2 py-1 text-sm">
                    <option><?= htmlspecialchars($comptes[0]['telephone'] ?? '') ?></option>
                    <!-- Ajouter d'autres numéros si multi-comptes -->
                </select>
                <button class="ml-2 text-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>