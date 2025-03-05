<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyMind - Tableau de Bord Utilisateur</title>
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
                    <a href="#" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-cogs"></i>
                        <span>Paramètres</span>
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
                        <h2 class="text-base text-custom font-semibold tracking-wide uppercase">Tableau de bord Utilisateur</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Suivez votre budget, vos objectifs d’épargne et vos souhaits
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Revenu restant -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-medium text-gray-900">Revenu restant</h3>
                            <p class="mt-4 text-2xl font-bold text-gray-700">{{$user->budget}} DH</p>
                        </div>

                        <!-- Dépenses totales -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-medium text-gray-900">Total Dépensé</h3>
                            <p class="mt-4 text-2xl font-bold text-gray-700">{{$total}} DH</p>
                        </div>

                        <!-- Objectifs d'épargne -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-medium text-gray-900">Objectifs d'Épargne</h3>
                            <p class="mt-4 text-2xl font-bold text-gray-700">60% atteint</p>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Graphique des dépenses par catégorie -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-medium text-gray-900">Dépenses par catégorie</h3>
                            <!-- Ajouter votre graphique ici -->
                            <div class="mt-4 h-64 bg-gray-100 rounded-md">Graphique</div>
                        </div>

                        <!-- Dernière suggestion IA -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-medium text-gray-900">Dernière suggestion IA</h3>
                            <p class="mt-4 text-gray-700">Optimisez vos dépenses en réduisant les achats non essentiels.</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-xl font-medium text-gray-900">Vos Souhaits</h3>
                        <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                            <ul>
                                <li class="flex justify-between py-2">
                                    <span>Voiture</span>
                                    <span class="text-gray-700">50% atteint</span>
                                </li>
                                <li class="flex justify-between py-2">
                                    <span>Vacances</span>
                                    <span class="text-gray-700">30% atteint</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="mt-8">
                        <h3 class="text-xl font-medium text-gray-900">Notifications</h3>
                        <ul class="mt-4 space-y-2">
                            <li class="text-sm text-gray-600">Alerte : Dépassement de budget de 20 € pour les loisirs</li>
                            <li class="text-sm text-gray-600">Notification : Salaire de 1 500,00 € crédité</li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Vous pouvez intégrer ici des scripts pour charger des graphiques, des données dynamiques, etc.
    </script>
</body>
</html>
