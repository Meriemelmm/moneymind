<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyMind - Gestion des Dépenses</title>
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
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 bg-gray-50">
            <nav class="bg-white shadow-sm">
                <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <img class="h-8 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="MoneyMind">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                      
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                         suivi votre souhaits 
                        </p>
                    </div>
                   

                    <div class="mt-10">
                        <!-- Ajouter une nouvelle dépense -->
                        <div class="mb-6">
                            
                                <button type="submit" class="mt-4 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <a href="{{route('wish.create')}}">Ajouter  votre souhaits </a>
                                </button>
                           
                        </div>

                        <!-- Liste des dépenses -->
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                     
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Montant Nécessaire</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Montant Épargné</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase"> priority</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Progression</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                               
    @foreach($souhaits as $souhait)
   
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap"> {{$souhait->souhait}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{$souhait->prix_total}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{$souhait->montant_economise}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{$souhait->priority}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                            <?php
$progress = (50 / 400) * 100; // Calcul de la largeur en pourcentage
?>
<div class="bg-green-500 h-2.5 rounded-full" style="width: <?php echo $progress; ?>%"></div>


                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                            <form action="" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-600 hover:text-red-900 ml-4">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                 
    @endforeach

                                   
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
       
    </script>
</body>
</html>
