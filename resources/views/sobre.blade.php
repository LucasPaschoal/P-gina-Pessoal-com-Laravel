<x-app>
    <x-slot:nav>
        <x-navbar></x-navbar>
    </x-slot>

    @section('content')
        <section class="my-profile u-align-center">
            <div class="container text-center">
                <div class="fundo">

                <h2 class="u-title">Olá!</h2>
                <p class="u-large-text">Eu sou um desenvolvedor web PHP</p>
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('img/profileImage.jpeg') }}" alt="Perfil" class="img-fluid profile-image">
                    </div>
                    <div class="col-lg-6">
                        <h4 class="u-text">Sobre mim</h4>
                        <p class="u-text">
                            Sou estudante de Sistemas de Informação com foco em desenvolvimento de software, banco de dados e segurança da informação. 
                            Iniciei minha carreira com manutenção de computadores, adquirindo habilidades em hardware e suporte técnico. 
                            Atualmente, sou estagiário de infraestrutura e tecnologia na FunnelMax, uma empresa de marketing digital, 
                            onde atuo na duplicação de páginas web, gerenciamento de automações de e-mail marketing e desenvolvimento de templates de e-mails. 
                            Estou sempre buscando aprender novas tecnologias para aprimorar minhas habilidades e evoluir na carreira.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="u-text">Detalhes</h4>
                    <p class="u-text">
                        <strong>Nome:</strong> Lucas Ferreira<br>
                        <strong>Idade:</strong> 21 anos<br>
                        <strong>Local:</strong> Bom Jesus do Norte, ES, Brasil
                    </p>
                    <div class="u-social-icons">
                        <a class="u-social-url" target="_blank" href="https://github.com/LucasPaschoal/" aria-label="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                        <a class="u-social-url" target="_blank" href="https://www.linkedin.com/in/lucas-ferreira-8bb281248/" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="u-social-url" target="_blank" href="https://www.instagram.com/lucas_f_pas/?next=%2F" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>  
                </div>
                </div>
            </div>
        </section>        
    @endsection
</x-app>
