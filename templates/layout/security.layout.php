
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAXITSA - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md bg-white rounded-3xl shadow-xl overflow-hidden" style="min-height: 650px;">
            <div class="p-10">
                <!-- Logo et titre -->
                <div class="mb-8 text-center">
                    <img src="/images/uploads/logb.png" alt="logo" class="w-15 h-12 mx-auto mb-2">
                    <span class="text-2xl font-bold text-gray-700 block">MAXITSA</span>
                    <p class="text-gray-600 text-sm">Bienvenue chez vous</p>
                    <!-- Mini cartes oranges -->
                  <?php 
           echo $contentForLayout ;
               ?>   
            </main>