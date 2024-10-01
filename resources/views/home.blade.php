<x-app>
    <x-slot:nav>
        <x-navbar></x-navbar>
    </x-slot>

    @section('content')
    <div class="container-fluid welcome-section py-5 text-center" style="background: linear-gradient(to right, #4a90e2, #9013fe);">
        <div class="overlay" style="background-color: rgba(255, 255, 255, 0.8); padding: 50px 0;">
            <h1 class="display-4 fw-bold mb-4 text-primary">Bem-vindo à Minha Página Pessoal!</h1>
            <p class="lead text-dark mb-5" style="margin: 20px;">Desenvolvida com Laravel, este espaço é onde compartilho um pouco sobre mim e meu trabalho como desenvolvedor.</p>
            <a href="sobre" class="btn btn-dark btn-lg px-4 py-2">Saiba Mais</a>
        </div>
    </div>

    @endsection
</x-app>
