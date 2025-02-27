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
<body class="bg-gray-50 min-h-screen font-[&#39;Poppins&#39;]">
    <div class="min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-lg shadow-lg">
            <div class="text-center">
                <img class="mx-auto h-16 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo"/>
                <h2 class="mt-6 text-3xl font-[&#39;Playfair_Display&#39;] font-bold text-gray-900">Ajouter une Dépense</h2>
                <p class="mt-2 text-sm text-gray-600">Enregistrez vos dépenses simplement</p>
            </div>

            <!-- Toggle pour choisir entre récurrent et non récurrent -->
            <!-- <div class="flex justify-center space-x-4 mt-8">
                <button id="uniqueTab" class="!rounded-button px-6 py-2 bg-custom text-white font-medium">Dépense unique</button>
                <button id="recurringTab" class="!rounded-button px-6 py-2 bg-gray-200 text-gray-700 font-medium">Dépense récurrente</button>
            </div> -->

            <form id="expenseForm" class="mt-8 space-y-6">
    <div class="space-y-4">
    <div class="mb-4">
            <p class="text-sm font-medium text-gray-700 mb-2">Type de dépense</p>
            <div class="flex items-center space-x-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" id="uniqueExpense" class="h-4 w-4 text-custom border-gray-300 rounded focus:ring-custom">
                    <span class="text-sm text-gray-700">Dépense unique</span>
                </label>

                <label class="flex items-center space-x-2">
                    <input type="checkbox" id="recurringExpense" class="h-4 w-4 text-custom border-gray-300 rounded focus:ring-custom">
                    <span class="text-sm text-gray-700">Dépense récurrente</span>
                </label>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">titre (obligatoire)</label>
            <div class="mt-1">
                <input class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" rows="3" placeholder="Ajoutez une description...">
            </div>
        </div>
        <!-- Montant -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Montant</label>
            <div class="mt-1 relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-euro-sign"></i>
                </span>
                <input type="number" step="0.01" required class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" placeholder="0.00">
            </div>
        </div>

        <!-- Catégorie -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Catégorie</label>
            <div class="mt-1 relative">
                <select class="appearance-none !rounded-button relative block w-full pl-3 pr-10 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
                    <option value="">Sélectionnez une catégorie</option> 
                    
                    @if(isset($categories) && $categories->count() > 0)
    @foreach($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->name_categorie }}</option>
    @endforeach
@endif  

                   
                </select>
            </div>
        </div>

        <!-- Date -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Date</label>
            <div class="mt-1 relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-calendar"></i>
                </span>
                <input type="date" required class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
            </div>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Description (optionnelle)</label>
            <div class="mt-1">
                <textarea class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" rows="3" placeholder="Ajoutez une description..."></textarea>
            </div>
        </div>

        <!-- Checkboxes pour choisir entre dépense unique ou récurrente -->
       
    </div>

    <button type="submit" class="!rounded-button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
        Enregistrer la dépense
    </button>
</form>
            <!-- Formulaire pour dépense récurrente
            <form id="recurringForm" class="mt-8 space-y-6 hidden">
                <div class="space-y-4">
                     Montant --> 
                    <!-- <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Montant</label>
                        <div class="mt-1 relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400"><i class="fas fa-euro-sign"></i></span>
                            <input type="number" step="0.01" required="" class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" placeholder="0.00"/>
                        </div>
                    </div> -->

                    <!-- Fréquence -->
                    <!-- <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Fréquence</label>
                        <div class="mt-1 relative">
                            <select class="appearance-none !rounded-button relative block w-full pl-3 pr-10 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
                                <option value="mensuel">Mensuel</option>
                                <option value="hebdomadaire">Hebdomadaire</option>
                                <option value="annuel">Annuel</option>
                            </select>
                        </div>
                    </div> -->

                    <!-- Date de début -->
                    <!-- <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Date de début</label>
                        <div class="mt-1 relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400"><i class="fas fa-calendar"></i></span>
                            <input type="date" required="" class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom"/>
                        </div>
                    </div> -->

                    <!-- Description -->
                     <!-- <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Description (optionnelle)</label>
                        <div class="mt-1">
                            <textarea class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" rows="3" placeholder="Ajoutez une description..."></textarea>
                        </div>
                    </div>
                </div> -->

              
            <!-- </form>   -->
        </div>
    </div> 

    <script>
       
    </script>
</body>
</html>
