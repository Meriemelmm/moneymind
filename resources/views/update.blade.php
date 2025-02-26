<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyMind - Gestion des catégories</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="small"></script>
</head>
<body class="bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-custom text-white min-h-screen p-6">
            <div class="flex items-center justify-center mb-6">
                <img class="h-8 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="MoneyMind">
            </div>
            <ul>
                <li>
                    <a href="#" class="flex items-center space-x-3 py-5 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-users"></i>
                        <span>Gestion des utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 py-5 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-wallet"></i>
                        <span>Gestion des dépenses</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 py- px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-cogs"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-cogs"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 bg-gray-50">
          
            <main class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-custom font-semibold tracking-wide uppercase">Gestion des catégories</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Ajoutez, modifiez et supprimez vos catégories facilement
                        </p>
                    </div>

                    <div class="mt-10">
                        <form method="POST"action="" >
                             @foreach ($categories as $categorie)

                     

                        <!-- Input to add category -->
                        <div class="flex items-center space-x-4">
                            <input type="text" id="categoryInput" class="border border-gray-300 rounded-md p-2 w-full" name="name_categorie" 
                             value="{{$categorie->name_categorie}}"
                           placeholder="Ajouter une nouvelle catégorie">
                            <button class="bg-custom text-white rounded-md px-4 py-2">modifier</button>
                            @endforeach
                        </form>
                    </div>

                        <!-- Categories Table -->
                       
                            
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
       
    </script>
</body>
</html>
