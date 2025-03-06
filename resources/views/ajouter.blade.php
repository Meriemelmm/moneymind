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
                    <a href="{{route('wish.create')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-plus"></i>
                        <span>ajouter souhait </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('wish.index')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-sync-alt"></i> <!-- Icône de synchronisation, souvent utilisée pour le suivi -->

                        <span>suivi  souhiats </span>
                    </a>
                </li>>
            </ul>
        </div>

        <!-- Contenu principal -->
        <div class="flex-1 flex justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
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
                            <p class="text-sm font-medium text-gray-700 mb-2">Type de dépense</p>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" id="uniqueExpense" name="type" class="h-4 w-4 text-custom border-gray-300 rounded focus:ring-custom" value="non recurrent">
                                    <span class="text-sm text-gray-700">Dépense unique</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" value="recurrent" id="recurringExpense" name="type" class="h-4 w-4 text-custom border-gray-300 rounded focus:ring-custom">
                                    <span class="text-sm text-gray-700">Dépense récurrente</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Titre (obligatoire)</label>
                            <div class="mt-1">
                                <input name="name_depense" class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" rows="3" placeholder="Ajoutez une depense...">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Montant</label>
                            <div class="mt-1 relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                    <i class="fas fa-euro-sign"></i>
                                </span>
                                <input name="montant" type="number" step="1" required class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" placeholder="0.00">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Catégorie</label>
                            <div class="mt-1 relative">
                                <select name="categorie_id" class="appearance-none !rounded-button relative block w-full pl-3 pr-10 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
                                    <option value="">Sélectionnez une catégorie</option>
                                    @if(isset($categories) && $categories->count() > 0)
                                        @foreach($categories as $categorie)
                                            <option value="{{ $categorie->id }}" name="categorie_id">{{ $categorie->name_categorie }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
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


    <script>
       let radios = document.querySelectorAll('input[name="type"]');
  let container = document.getElementById("extraInputContainer");

  radios.forEach((radio) => {
    radio.addEventListener("change", function () {
      if (this.value === "recurrent") {
        container.innerHTML = `  <label class="block text-sm font-medium text-gray-700">Date recurence</label>
            <div class="mt-1 relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-calendar"></i>
                </span>
                <input type="number" name="date_recurrence" required class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
            </div> 


 
`;
      } else {
        container.innerHTML = `  <label class="block text-sm font-medium text-gray-700">Date depense</label>
            <div class="mt-1 relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-calendar"></i>
                </span>
                <input type="date" name="date_depense" required class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
            </div>`;
      }
    });
  });

    </script>
</body>
</html>
