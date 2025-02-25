<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyMind - Objectifs d'Épargne</title>
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
                    <a href="#" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-chart-line"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                        <i class="fas fa-wallet"></i>
                        <span>Gestion des Dépenses</span>
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
                        <h2 class="text-base text-custom font-semibold tracking-wide uppercase">Objectifs d'Épargne</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Suivez et atteignez vos objectifs d'épargne mensuels
                        </p>
                    </div>

                    <div class="mt-8">
                        <!-- Ajouter un objectif -->
                        <div class="flex justify-end">
                            <a href="ajouter-objectif.html" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Ajouter un objectif d'épargne
                            </a>
                        </div>

                        <!-- Liste des objectifs -->
                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Objectif d'épargne 1 -->
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-medium text-gray-900">Objectif Voiture</h3>
                                <p class="mt-4 text-2xl font-bold text-gray-700">500,00 € / 1 000,00 €</p>
                                <div class="mt-2 text-gray-600">50% atteint</div>
                            </div>

                            <!-- Objectif d'épargne 2 -->
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-medium text-gray-900">Objectif Vacances</h3>
                                <p class="mt-4 text-2xl font-bold text-gray-700">200,00 € / 800,00 €</p>
                                <div class="mt-2 text-gray-600">25% atteint</div>
                            </div>
                        </div>
                    </div>

                    <!-- Suggestions IA -->
                    <div class="mt-8">
                        <h3 class="text-xl font-medium text-gray-900">Suggestions pour optimiser votre épargne</h3>
                        <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                            <p class="text-gray-700">Réduisez vos achats non essentiels et réévaluez vos dépenses mensuelles pour augmenter votre épargne.</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Vous pouvez intégrer ici des scripts pour charger des données dynamiques.
    </script>
</body>
</html>
