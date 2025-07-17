<!-- Header utilisateur -->
<?php /* print_r($comptes) */ ?>

<div class="bg-gray-800 ml-[90px] rounded-xl p-4 flex items-center gap-80 shadow-lg w-[1050px] mb-8 ">
    <div>
        <div class="flex items-center gap-4 mb-2">
            <img src="/images/uploads/logb.png" alt="logo" class="w-20 h-12">
            <span class="text-white font-bold text-2xl">MAXITSA</span>
        </div>
        <h1 class="text-white text-xl font-bold mb-1 ml-20">MES INFOS :</h1>
        <div class=" mb-1 ml-20">
        <div class="text-white text-xl font-semibold mb-1 ml-20">  
            <?= htmlspecialchars($comptes[0]['prenom'] ." ".$comptes[0]['nom'] ?? 'Utilisateur') ?>
        </div>
         <div class="text-gray-300 text-lg ml-20"><?= htmlspecialchars($comptes[0]['numero_compte'] ?? '') ?></div>
        <div class="flex items-center gap-2 mt-2 ml-20">
              <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
            <span class="text-gray-300"><?= htmlspecialchars($comptes[0]['solde'] ?? '0') ;  ?> FCFA</span>
        
        </div>
       
          </div>
    </div>
    <div class="ml-20">
        <img src="/images/uploads/qrcode.png" alt="QR Code" class="w-40 h-40 rounded bg-white">
    </div>
</div>


