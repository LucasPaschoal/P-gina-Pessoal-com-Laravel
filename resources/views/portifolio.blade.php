<x-app>
    <x-slot:nav>
        <x-navbar></x-navbar>
    </x-slot>
    
    @section('content')
    <div class="portfolio-section py-5">
        <div class="container">
            <h2 class="text-center mb-4 text-white">Meu Portifólio</h2>
            <div class="row">
                <x-portfolio-card 
                    badgeColor="bg-warning text-dark" 
                    badgeText="JavaScript" 
                    title="Cadastrar Carros REST API" 
                    description="API REST com javaSript para gerenciar o cadastro de carros" 
                    link="https://github.com/LucasPaschoal/API-REST-com-JavaScript"
                />

                <x-portfolio-card 
                    badgeColor="bg-danger" 
                    badgeText="Java" 
                    title="Agenda de Contatos Java" 
                    description="Agenda de contatos em java, com interface simples e Banco de Dados" 
                    link="https://github.com/LucasPaschoal/Agenda-de-Contatos-Java"
                />
    
                <x-portfolio-card 
                    badgeColor="bg-secondary" 
                    badgeText="C" 
                    title="Criptografia em C" 
                    description="Programa em C, que faz a criptografia e descriptografia de um texto" 
                    link="https://github.com/LucasPaschoal/Criptografia-C"
                />

                <x-portfolio-card 
                    badgeColor="bg-primary" 
                    badgeText="Python" 
                    title="Algoritmos de Criptografia em python" 
                    description="Possui algorítimos de criptografia que utilizan diferentes métodos para criptografar mensagens, dentre esses métodos temos o de Substituição, Cifra de César, Rail-Fence e Vigenere" 
                    link="https://github.com/LucasPaschoal/Algoritmos-de-Criptografia-em-python"
                />

                <x-portfolio-card 
                    badgeColor="bg-info text-dark" 
                    badgeText="PHP" 
                    title="Client-Financial-Analysis-Tool" 
                    description="Um programa que lê dados de um banco de dados via PHP, retorna informações em formato JSON e utiliza a Fetch API para apresentar uma análise detalhada das despesas e receitas dos clientes. Exibe o cliente com maior receita e despesa." 
                    link="https://github.com/LucasPaschoal/Client-Financial-Analysis-Tool"
                />
            </div>
        </div>
    </div>
    
    @endsection
</x-app>
