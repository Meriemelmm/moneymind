<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MoneyMind | Ajouter une Dépense</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="small"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-custom text-white min-h-screen p-6">
            <div class="flex items-center justify-center mb-6">
                <img class="h-8 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="MoneyMind">
            </div>
            <ul>
            <li>
                    <a href="{{route('bordUser')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-chart-line"></i>

                        <span> tableau du bord </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('ajouter.index')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-plus"></i>
                        <span>ajouter depense</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('depenses')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-wallet"></i>
                        <span>Gestion depenses </span>
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

        <!-- Contenu principal -->
        <div class="flex-1 flex justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
           <!-- Formulaire pour Ajouter un Objectif -->
           <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-lg shadow-lg">
                <div class="text-center">
                    <img class="mx-auto h-16 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo"/>
                    <h2 class="mt-6 text-3xl font-[&#39;Playfair_Display&#39;] font-bold text-gray-900">Ajouter une Dépense</h2>
                    <p class="mt-2 text-sm text-gray-600">Enregistrez vos dépenses simplement</p>
                </div>

                <form id="expenseForm" class="mt-8 space-y-6" method="POST" action="{{ route('store.depense') }}">
                    @csrf
                    <div class="space-y-4">
                       

                    <div class="mb-4">
        <label for="target_amount" class="block text-sm font-medium text-gray-700">Montant Cible d'Épargne</label>
        <input type="number" id="target_amount" name="target_amount" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ex : 2000 DH" required>
    </div>

                        

                        

                        <div class="mb-4" id="extraInputContainer"></div>
                    </div>

                    <button type="submit" class="!rounded-button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                        Enregistrer la dépense
                    </button>
                </form>
            </div>

        </div>
    </div>
    

   
</body>
</html>
