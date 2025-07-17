
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAXITSA - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen  flex items-center justify-center ">

    <div class="  bg-gray-200  flex-col  justify-center rounded-xl overflow-hidden shadow-2xl w-full h-[900px] max-w-screen-2xl">

  <?php require_once '../templates/layout/partial/header.php' ?> 
     <div class="flex flex-1w-full h-full ">

  <?php require_once '../templates/layout/partial/menu.php' ?> 
       
            <!-- Menu latéral -->
            <!-- Contenu principal -->
            <main class=" w-full   pt-6 pl-10 pb-0 "> 
            <?php 
            echo $contentForLayout ;
                ?>          
            </main>
        </div>
    </div>
</body>
</html>