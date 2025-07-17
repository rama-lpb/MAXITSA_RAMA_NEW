<?php  /* var_dump($_SESSION['erreurs'])   */?>
                    <div class="flex justify-center gap-8 mt-8 mb-10">
                        <div class="w-14 h-8 rounded shadow-md bg-orange-400 flex items-center justify-center">
                            <span class="text-white font-bold text-xs"></span>
                        </div>
                        <div class="w-14 h-8 rounded shadow-md bg-orange-400 flex items-center justify-center">
                            <span class="text-white font-bold text-xs"></span>
                        </div>
                        <div class="w-14 h-8 rounded shadow-md bg-orange-400 flex items-center justify-center">
                            <span class="text-white font-bold text-xs"></span>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de connexion -->
                <form method="post" class="space-y-6" action="">
                    <!-- Champ numéro de téléphone -->
                      <div class="rounded-lg border-black ">
                         <?php if (!empty($_SESSION['erreurs']['identifiants'])): ?>
                            <p class="text-red-500 text-xl mt-1 mb-10 ml-2 "><?= htmlspecialchars($_SESSION['erreurs']['identifiants']) ?></p>
                        <?php endif; ?>
                      </div>
                    <div>
                        <input 
                            type="text" 
                            name="login"
                            placeholder="Votre Nom"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700"
                        />
                        <?php if (!empty($_SESSION['erreurs']['login'])): ?>
                            <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($_SESSION['erreurs']['login']) ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Champ code PIN -->
                    <div>
                        <input 
                            type="password" 
                            name="password"
                            placeholder="password "
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700"
                        />
                        <?php if (!empty($_SESSION['erreurs']['password'])): ?>
                            <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($_SESSION['erreurs']['password']) ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Erreur globale -->
                    <?php if (!empty($errors['global'])): ?>
                        <div class="text-red-500 text-center mb-4"><?= htmlspecialchars($errors['global']) ?></div>
                    <?php endif; ?>

                    <!-- Lien inscription -->
                    <div class="text-center">
                        <p class="text-gray-600 text-sm">
                            Nouveau ? 
                            <a href="<?php  $requestUri = $_SERVER['REQUEST_URI']?>inscription" class="text-orange-500 hover:text-orange-600 ml-1 font-semibold">
                                Créez un nouveau compte
                            </a>
                        </p>
                    </div>

                    <!-- Checkbox souvenir -->
                    <div class="flex items-center mb-4">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500 focus:ring-2"
                        >
                        <label for="remember" class="ml-3 text-sm text-gray-600">Se souvenir de moi</label>
                    </div>

                    <!-- Bouton de confirmation -->
                    <button 
                        type="submit" 
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors"
                    >
                     Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>