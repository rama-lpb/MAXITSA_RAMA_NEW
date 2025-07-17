<!-- Header utilisateur -->
<?php /* print_r($comptes) */ ?>

<div class="bg-gradient-to-r from-gray-800 to-gray-900 ml-[90px] rounded-xl p-6 flex items-center justify-between shadow-lg w-[1050px] mb-8">
    <div class="flex items-center gap-8">
        <div class="flex items-center gap-4">
            <img src="/images/uploads/logb.png" alt="logo" class="w-20 h-12">
            <span class="text-white font-bold text-2xl">MAXITSA</span>
        </div>
        <div class="border-l border-gray-600 pl-8">
            <h1 class="text-white text-xl font-bold mb-2">MES INFOS</h1>
            <div class="text-white text-xl font-semibold mb-1">  
                <?= htmlspecialchars($comptes[0]['prenom'] ." ".$comptes[0]['nom'] ?? 'Utilisateur') ?>
            </div>
            <div class="text-gray-300 text-lg mb-2"><?= htmlspecialchars($comptes[0]['numero_compte'] ?? '') ?></div>
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                </svg>
                <span class="text-orange-400 text-xl font-bold"><?= htmlspecialchars($comptes[0]['solde'] ?? '0') ?> FCFA</span>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-4">
        <div class="text-center">
            <div class="text-gray-300 text-sm mb-1">Compte Principal</div>
            <img src="/images/uploads/qrcode.png" alt="QR Code" class="w-32 h-32 rounded-lg bg-white p-2">
        </div>
    </div>
</div>

<!-- Actions rapides -->
<!-- <div class="ml-[90px] mb-8">
    <div class="grid grid-cols-4 gap-4 w-[1050px]">
        <button class="bg-orange-500 hover:bg-orange-600 text-white rounded-xl p-4 transition-colors shadow-lg">
            <svg class="w-8 h-8 mb-2 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            <span class="font-semibold">Dépôt</span>
        </button>
        <button class="bg-red-500 hover:bg-red-600 text-white rounded-xl p-4 transition-colors shadow-lg">
            <svg class="w-8 h-8 mb-2 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
            </svg>
            <span class="font-semibold">Retrait</span>
        </button>
        <button class="bg-blue-500 hover:bg-blue-600 text-white rounded-xl p-4 transition-colors shadow-lg">
            <svg class="w-8 h-8 mb-2 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            <span class="font-semibold">Paiement</span>
        </button>
        <button class="bg-green-500 hover:bg-green-600 text-white rounded-xl p-4 transition-colors shadow-lg">
            <svg class="w-8 h-8 mb-2 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
            <span class="font-semibold">Historique</span>
        </button>
    </div>
</div> -->

<!-- Aperçu des transactions récentes -->
<div class="ml-[90px] bg-white rounded-xl shadow-lg p-6 w-[1050px]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Transactions récentes</h2>
        <a href="<?php echo APP_URL ?? '' ?>transactions" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-colors">
            Voir plus
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-gray-200">
                    <th class="text-left py-3 px-4 font-semibold text-gray-700">Date</th>
                    <th class="text-left py-3 px-4 font-semibold text-gray-700">Description</th>
                    <th class="text-left py-3 px-4 font-semibold text-gray-700">Type</th>
                    <th class="text-right py-3 px-4 font-semibold text-gray-700">Montant</th>
                    <th class="text-center py-3 px-4 font-semibold text-gray-700">Statut</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-3 px-4 text-gray-600">15/07/2025</td>
                    <td class="py-3 px-4">
                        <div class="font-medium text-gray-800">Paiement Boutique</div>
                        <div class="text-sm text-gray-500">Référence: TXN-001234</div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                            <div class="w-2 h-2 bg-orange-600 rounded-full mr-1"></div>
                            Paiement
                        </span>
                    </td>
                    <td class="py-3 px-4 text-right text-red-600 font-bold">-15,000 FCFA</td>
                    <td class="py-3 px-4 text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Terminé
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-3 px-4 text-gray-600">14/07/2025</td>
                    <td class="py-3 px-4">
                        <div class="font-medium text-gray-800">Dépôt d'argent</div>
                        <div class="text-sm text-gray-500">Référence: TXN-001233</div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <div class="w-2 h-2 bg-green-600 rounded-full mr-1"></div>
                            Dépôt
                        </span>
                    </td>
                    <td class="py-3 px-4 text-right text-green-600 font-bold">+50,000 FCFA</td>
                    <td class="py-3 px-4 text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Terminé
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-3 px-4 text-gray-600">13/07/2025</td>
                    <td class="py-3 px-4">
                        <div class="font-medium text-gray-800">Retrait espèces</div>
                        <div class="text-sm text-gray-500">Référence: TXN-001232</div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            <div class="w-2 h-2 bg-red-600 rounded-full mr-1"></div>
                            Retrait
                        </span>
                    </td>
                    <td class="py-3 px-4 text-right text-red-600 font-bold">-25,000 FCFA</td>
                    <td class="py-3 px-4 text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Terminé
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-3 px-4 text-gray-600">12/07/2025</td>
                    <td class="py-3 px-4">
                        <div class="font-medium text-gray-800">Paiement facture</div>
                        <div class="text-sm text-gray-500">Référence: TXN-001231</div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                            <div class="w-2 h-2 bg-orange-600 rounded-full mr-1"></div>
                            Paiement
                        </span>
                    </td>
                    <td class="py-3 px-4 text-right text-red-600 font-bold">-8,500 FCFA</td>
                    <td class="py-3 px-4 text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Terminé
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                    <td class="py-3 px-4 text-gray-600">11/07/2025</td>
                    <td class="py-3 px-4">
                        <div class="font-medium text-gray-800">Dépôt mobile</div>
                        <div class="text-sm text-gray-500">Référence: TXN-001230</div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <div class="w-2 h-2 bg-green-600 rounded-full mr-1"></div>
                            Dépôt
                        </span>
                    </td>
                    <td class="py-3 px-4 text-right text-green-600 font-bold">+75,000 FCFA</td>
                    <td class="py-3 px-4 text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Terminé
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>