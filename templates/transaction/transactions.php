<!-- Page des Transactions -->
<div class="ml-[100px] bg-gray-800 rounded-xl shadow-lg p-8 px-10 w-[1000px]">
    <!-- Header avec titre et barre de recherche -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-white">Mes Transactions</h2>
        <div class="flex items-center gap-4">
            <!-- Barre de recherche -->
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Rechercher une transaction..." 
                    class="bg-gray-700 text-white placeholder-gray-400 rounded-lg px-4 py-2 w-80 focus:outline-none focus:ring-2 focus:ring-orange-500"
                />
                <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <!-- Filtres -->
            <select class="bg-gray-700 text-white rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option>Tous les types</option>
                <option>Paiement</option>
                <option>Dépôt</option>
                <option>Retrait</option>
            </select>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="bg-green-600 rounded-lg p-4 text-center">
            <div class="text-white text-sm font-medium">Dépôts</div>
            <div class="text-white text-xl font-bold">125,000 FCFA</div>
        </div>
        <div class="bg-red-600 rounded-lg p-4 text-center">
            <div class="text-white text-sm font-medium">Retraits</div>
            <div class="text-white text-xl font-bold">89,500 FCFA</div>
        </div>
        <div class="bg-blue-600 rounded-lg p-4 text-center">
            <div class="text-white text-sm font-medium">Paiements</div>
            <div class="text-white text-xl font-bold">45,200 FCFA</div>
        </div>
    </div>

    <!-- Liste des transactions -->
    <div class="space-y-3">
        <!-- Transaction 1 - Paiement -->
        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between hover:bg-gray-100 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold text-gray-800">Paiement Boutique</div>
                    <div class="text-sm text-gray-600">15 Juillet 2025 - 14:30</div>
                    <div class="text-xs text-gray-500">Référence: TXN-2025-001234</div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold text-gray-800">-15,000 FCFA</div>
                <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                    <div class="w-2 h-2 bg-orange-600 rounded-full mr-1"></div>
                    Paiement
                </div>
            </div>
        </div>

        <!-- Transaction 2 - Dépôt -->
        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between hover:bg-gray-100 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold text-gray-800">Dépôt d'argent</div>
                    <div class="text-sm text-gray-600">14 Juillet 2025 - 10:15</div>
                    <div class="text-xs text-gray-500">Référence: TXN-2025-001233</div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold text-gray-800">+50,000 FCFA</div>
                <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    <div class="w-2 h-2 bg-green-600 rounded-full mr-1"></div>
                    Dépôt
                </div>
            </div>
        </div>

        <!-- Transaction 3 - Retrait -->
        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between hover:bg-gray-100 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold text-gray-800">Retrait espèces</div>
                    <div class="text-sm text-gray-600">13 Juillet 2025 - 16:45</div>
                    <div class="text-xs text-gray-500">Référence: TXN-2025-001232</div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold text-gray-800">-25,000 FCFA</div>
                <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    <div class="w-2 h-2 bg-red-600 rounded-full mr-1"></div>
                    Retrait
                </div>
            </div>
        </div>

        <!-- Transaction 4 - Paiement -->
        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between hover:bg-gray-100 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold text-gray-800">Paiement facture</div>
                    <div class="text-sm text-gray-600">12 Juillet 2025 - 09:20</div>
                    <div class="text-xs text-gray-500">Référence: TXN-2025-001231</div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold text-gray-800">-8,500 FCFA</div>
                <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                    <div class="w-2 h-2 bg-orange-600 rounded-full mr-1"></div>
                    Paiement
                </div>
            </div>
        </div>

        <!-- Transaction 5 - Dépôt -->
        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between hover:bg-gray-100 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold text-gray-800">Dépôt mobile</div>
                    <div class="text-sm text-gray-600">11 Juillet 2025 - 13:10</div>
                    <div class="text-xs text-gray-500">Référence: TXN-2025-001230</div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold text-gray-800">+75,000 FCFA</div>
                <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    <div class="w-2 h-2 bg-green-600 rounded-full mr-1"></div>
                    Dépôt
                </div>
            </div>
        </div>

        <!-- Transaction 6 - Retrait -->
        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between hover:bg-gray-100 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold text-gray-800">Retrait distributeur</div>
                    <div class="text-sm text-gray-600">10 Juillet 2025 - 17:30</div>
                    <div class="text-xs text-gray-500">Référence: TXN-2025-001229</div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold text-gray-800">-40,000 FCFA</div>
                <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    <div class="w-2 h-2 bg-red-600 rounded-full mr-1"></div>
                    Retrait
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center gap-2 mt-6">
        <button class="px-3 py-1 bg-gray-600 text-white rounded hover:bg-gray-700 disabled:opacity-50" disabled>
            Précédent
        </button>
        <button class="px-3 py-1 bg-orange-500 text-white rounded">1</button>
        <button class="px-3 py-1 bg-gray-600 text-white rounded hover:bg-gray-700">2</button>
        <button class="px-3 py-1 bg-gray-600 text-white rounded hover:bg-gray-700">3</button>
        <button class="px-3 py-1 bg-gray-600 text-white rounded hover:bg-gray-700">
            Suivant
        </button>
    </div>
</div>