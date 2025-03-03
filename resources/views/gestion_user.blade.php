<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyMind - Gestion des utilisateurs</title>
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
                    <a href="{{route('bordAdmin')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-users"></i>
                        <span>tableau du bord </span>
                    </a>
                </li>
            <li>
                    <a href="{{route('users.index')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-users"></i>
                        <span>Gestion des utilisateurs</span>
                    </a>
                </li>
             
                <li>
                    <a href="{{route('show.categorie')}}" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-wallet"></i>
                        <span>Gestion des categories</span>
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
            <!-- <nav class="bg-white shadow-sm">
                <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <img class="h-8 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="MoneyMind">
                            </div>
                        </div>
                    </div>
                </div>
            </nav> -->

            <main class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-custom font-semibold tracking-wide uppercase">Gestion des utilisateurs</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Gérer vos utilisateurs
                        </p>
                    </div>

                    <div class="mt-10">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" id="userTableBody">
                                    <!-- Liste des utilisateurs -->
                                    @foreach( $users as $user ) <tr>
                                       
                                        <td class="px-6 py-4 whitespace-nowrap"> {{$user->name}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form action="{{route('users.destroy', ['userid' => $user->id])}}" method="POST">
                                            @csrf
                                             @method('DELETE')   
                                      
                                                <input type="hidden" value="{{$user->id}}">
                                           
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="deleteUser(1)">Supprimer</button></form>
                                        </td>
                                     
                                    </tr>   @endforeach
                                    <!-- <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                        <td class="px-6 py-4 whitespace-nowrap">janesmith@example.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button class="text-indigo-600 hover:text-indigo-900" onclick="editUser(2)">Modifier</button>
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="deleteUser(2)">Supprimer</button>
                                        </td>
                                    </tr> -->
                                    <!-- Vous pouvez ajouter plus d'utilisateurs ici -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
     
        

        //;
    </script>
</body>
</html>
