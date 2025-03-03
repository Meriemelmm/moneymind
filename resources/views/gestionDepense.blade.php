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
                    <a href="" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-wallet"></i>
                        <span>Depenses Recurrentes</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 py-2 px-3 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-wallet"></i>
                        <span>Depenses Uniques </span>
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
                        <h2 class="text-base text-custom font-semibold tracking-wide uppercase">Gestion des Dépenses</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Gérez vos dépenses manuelles et récurrentes
                        </p>
                    </div>

                    <div class="mt-10">
                        <!-- Ajouter une nouvelle dépense -->
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold">Ajouter une nouvelle dépense</h3>
                            <form id="addExpenseForm" class="mt-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="expenseName" class="block text-sm font-medium text-gray-700">Nom de la dépense</label>
                                        <input type="text" id="expenseName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nom de la dépense" required>
                                    </div>
                                    <div>
                                        <label for="expenseAmount" class="block text-sm font-medium text-gray-700">Montant</label>
                                        <input type="number" id="expenseAmount" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Montant" required>
                                    </div>
                                    <div>
                                        <label for="expenseCategory" class="block text-sm font-medium text-gray-700">Catégorie</label>
                                        <select id="expenseCategory" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                            <option value="Alimentation">Alimentation</option>
                                            <option value="Transport">Transport</option>
                                            <option value="Logement">Logement</option>
                                            <option value="Loisirs">Loisirs</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="mt-4 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Ajouter la dépense
                                </button>
                            </form>
                        </div>

                        <!-- Liste des dépenses -->
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" id="expenseTableBody">
                                    <!-- Liste des dépenses -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">Déjeuner</td>
                                        <td class="px-6 py-4 whitespace-nowrap">10,00 €</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Alimentation</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button class="text-indigo-600 hover:text-indigo-900" onclick="editExpense(1)">Modifier</button>
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="deleteExpense(1)">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">Transport</td>
                                        <td class="px-6 py-4 whitespace-nowrap">15,00 €</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Transport</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button class="text-indigo-600 hover:text-indigo-900" onclick="editExpense(2)">Modifier</button>
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="deleteExpense(2)">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Liste des dépenses
        let expenses = [
            { id: 1, name: 'Déjeuner', amount: '10,00 €', category: 'Alimentation' },
            { id: 2, name: 'Transport', amount: '15,00 €', category: 'Transport' },
        ];

        // Fonction pour supprimer une dépense
        function deleteExpense(expenseId) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cette dépense ?")) {
                expenses = expenses.filter(expense => expense.id !== expenseId);
                renderExpenses();
            }
        }

        // Fonction pour afficher les dépenses dans le tableau
        function renderExpenses() {
            const tableBody = document.getElementById('expenseTableBody');
            tableBody.innerHTML = ''; // Effacer les dépenses existantes

            expenses.forEach(expense => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">${expense.name}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${expense.amount}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${expense.category}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="text-indigo-600 hover:text-indigo-900" onclick="editExpense(${expense.id})">Modifier</button>
                        <button class="text-red-600 hover:text-red-900 ml-4" onclick="deleteExpense(${expense.id})">Supprimer</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Fonction pour modifier une dépense
        function editExpense(expenseId) {
            const expense = expenses.find(expense => expense.id === expenseId);
            const newName = prompt("Modifier le nom", expense.name);
            const newAmount = prompt("Modifier le montant", expense.amount);
            const newCategory = prompt("Modifier la catégorie", expense.category);
            if (newName && newAmount && newCategory) {
                expense.name = newName;
                expense.amount = newAmount;
                expense.category = newCategory;
                renderExpenses();
            }
        }

        // Afficher les dépenses au chargement de la page
        renderExpenses();

        // Ajouter une dépense
        document.getElementById('addExpenseForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('expenseName').value;
            const amount = document.getElementById('expenseAmount').value;
            const category = document.getElementById('expenseCategory').value;

            const newExpense = {
                id: expenses.length + 1,
                name: name,
                amount: `${amount} €`,
                category: category,
            };

            expenses.push(newExpense);
            renderExpenses();

            // Réinitialiser le formulaire
            document.getElementById('addExpenseForm').reset();
        });
    </script>
</body>
</html>
