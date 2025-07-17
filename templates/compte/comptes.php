<div class=" items-center ml-[100px] bg-gray-800 rounded-xl shadow-lg p-8 px-10 w-[1000px]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-white">Mes comptes</h2>
        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-colors ">
            + Nouveau compte secondaire
        </a>
    </div>
    <div class="space-y-4">
        <?php foreach ($comptes as $compte): ?>
            <div class="border rounded-lg p-10 flex items-center justify-between bg-gray-50">
                <div>
                    <div class="font-semibold text-gray-800">
                        <?= $compte['type_id'] == 1 ? 'Principal' : 'Secondaire' ?>
                    </div>
                    <div class="text-gray-600 text-sm">NuméroCompte : <?= htmlspecialchars($compte['numero_compte']) ?></div>
                    <div class="text-gray-600 text-sm">Solde : <span class="font-bold"><?= htmlspecialchars($compte['solde']) ?> FCFA</span></div>
                    <div class="text-gray-500 text-xs">Créé le : <?= htmlspecialchars($compte['date']) ?></div>
                </div>
                <div>
                    <img src="/images/uploads/qrcode.png" alt="QR Code" class="w-16 h-16 rounded bg-white">
                </div>
                        </div>
        <?php endforeach; ?>
    </div>
</div>
