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
                                        <a href="{{route('wish.edit',['updateid'=>$souhait->id])}}" class="text-indigo-600 hover:text-indigo-900">Modifier</a>                                        <form action="{{route('wish.destroy',['id'=>$souhait->id])}}" method="POST" class="inline-block">
                                            @csrf                   
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">Supprimer</button>
                                                @method('DELETE')
                                                </form>
                                        </td>
                                    </tr>
                                   
                                 
                                    <!-- <div id="modalModifier" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
                                       <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                                           <h2 class="text-xl font-semibold mb-4">Modifier l'élément</h2>
                                    <form id="expenseForm" class="mt-8 space-y-6" method="POST" action="{{route('wish.store',$souhait->id)}}">
                                                       @csrf
                                                       <div class="space-y-4">
                                                        
                               
                                                           <div class="mb-4">
                                                               <label class="block text-sm font-medium text-gray-700">{{$souhait->id}}</label>
                                                               <div class="mt-1">
                                                                   <input name="souhait" value="{{ old('name', $souhait->name) }}" class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" rows="3" placeholder="Ajoutez une souhait...">
                                                               </div>
                                                           </div>
                                    
                                                           <div class="mb-4">
                                                               <label class="block text-sm font-medium text-gray-700">prix total</label>
                                                               <div class="mt-1 relative">
                                                                   <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                                                       <i class="fas fa-euro-sign"></i>
                                                                   </span>
                                                                   <input name="prix_total" type="number" step="1" required class="appearance-none !rounded-button relative block w-full pl-10 pr-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" placeholder="0.00">
                                                               </div>
                                                           </div>
                                                           <div class="mb-4">
                                                               <label class="block text-sm font-medium text-gray-700">Priority</label>
                                                               <div class="mt-1 relative">
                                                                   <select name="priority" class="appearance-none !rounded-button relative block w-full pl-3 pr-10 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom">
                                                                       <option value=""></option>
                                                                       
                                                                          
                                                                               <option value="Haute" name="priority">Haute</option>
                                                                               <option value="Basse" name="priority">Basse</option>
                                                                               <option value="Moyenne" name="priority">Moyenne</option>
                                                                            
                                                                       
                                                                     
                                                                   </select>
                                                               </div>
                                                           </div>
                                    
                                                         
                                    
                                                           <div class="mb-4" id="extraInputContainer"></div>
                                                       </div>
                                    
                                                       <button type="submit" class="!rounded-button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                                                           Enregistrer votre souhait
                                                       </button>
                                    </form>
                                       </div>
                                    </div>  -->
    @endforeach

                                   
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<!-- modeeeeeeeeeeeeeeeel -->






    <script>
    //       function openModal(id) {
    //     document.getElementById('modalModifier').classList.remove('hidden');
    //     document.getElementById('modalItemId').innerText = id; // Display ID in modal
    //     document.getElementById('editItemId').value = id; // Store ID in hidden input
    // }
    </script>
</body>
</html>
