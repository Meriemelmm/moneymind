<!DOCTYPE html><html lang="fr"><head>
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
                <h2 class="mt-6 text-3xl font-[&#39;Playfair_Display&#39;] font-bold text-gray-900">Définir un Objectif d&#39;Épargne</h2>
                <p class="mt-2 text-sm text-gray-600">Planifiez et suivez vos objectifs financiers</p>
            </div>
            
            <form id="loginForm" class="mt-8 space-y-6"><div class="space-y-4"><div class="mb-4"><label class="block text-sm font-medium text-gray-700">Nom de l&#39;objectif</label><div class="mt-1"><input type="text" required="" class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" placeholder="Ex: Achat maison, Vacances..."/></div></div><div class="mb-4"><label class="block text-sm font-medium text-gray-700">Montant cible</label><div class="mt-1"><input type="number" required="" class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom" placeholder="Montant à atteindre"/></div></div><div class="mb-4"><label class="block text-sm font-medium text-gray-700">Date cible</label><div class="mt-1"><input type="date" required="" class="appearance-none !rounded-button block w-full px-3 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-custom focus:border-custom"/></div></div></div><button type="submit" class="!rounded-button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">Créer l&#39;objectif d&#39;épargne</button></form>
            
            <div class="text-xs text-center text-gray-500 mt-4">Notre IA analysera vos dépenses pour vous suggérer des opportunités d&#39;épargne</div>
        </div>
    </div>
    <script>
        const loginTab = document.getElementById('loginTab');
        const registerTab = document.getElementById('registerTab');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        loginTab.addEventListener('click', () => {
            loginTab.classList.remove('bg-gray-200', 'text-gray-700');
            loginTab.classList.add('bg-custom', 'text-white');
            registerTab.classList.remove('bg-custom', 'text-white');
            registerTab.classList.add('bg-gray-200', 'text-gray-700');
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
        });
        registerTab.addEventListener('click', () => {
            registerTab.classList.remove('bg-gray-200', 'text-gray-700');
            registerTab.classList.add('bg-custom', 'text-white');
            loginTab.classList.remove('bg-custom', 'text-white');
            loginTab.classList.add('bg-gray-200', 'text-gray-700');
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
        });
    </script>
