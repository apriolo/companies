Desenvolva um sistema onde o usuário possa buscar por informações de uma
empresa a partir de seu nome ou endereço. O sistema deve contemplar as
seguintes áreas:
• Tela inicial onde um visitante pode fazer uma busca por determinada empresa.
• Tela de resultados com a listagem das empresas encontradas
• Tela de detalhes da empresa, com todas as informações cadastradas
• Interface administrativa para cadastro de empresas

As empresas devem contemplar os seguintes campos:
• Título
• Telefone
• Endereço
• Cep
• Cidade
• Estado
• Descrição
• Categoria

Considerações
1. Buscas vazias não devem ser permitidas
2. A interface administrativa deve ser protegida por senha
3. Os seguintes campos devem ser considerados para a busca: Título, endereço,
cep, cidade, categoria.
4. Todos os campos do cadastro de empresa são obrigatórios
5. Empresas podem ter uma ou mais categorias

6. Considere que as categorias abaixo já foram cadastradas no sistema:
• Auto
• Beauty and Fitness
• Entertainment
• Food and Dining
• Health
• Sports
• Travel

Ferramentas Utilizadas
• Framework : Laravel 8x
• ORM : Eloquent
• Engine de Template : Blade
• MySQL 5.6
• MVC

Para popular o banco
php artisan db:seed --class=CategoriesSeeder
