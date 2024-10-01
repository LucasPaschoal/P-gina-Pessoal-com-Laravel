<x-app>
    <x-slot:nav>
        <x-navbar></x-navbar>
    </x-slot>
    
    @section('content')
    <section class="my-profile u-align-center">
        <div class="container text-center">
            <div class="fundo">

            <h2 class="u-title">Contatos</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/profileImage.jpeg') }}" alt="Perfil" class="img-fluid profile-image">
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6 text-center"> 
                        <h4 class="u-text">Informações de Contato</h4>
                       
                        <a href="mailto:lucaspaschoal2003@gmail.com">
                            <img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="e-mail" class="mb-3">
                        </a>
                        
                        <a href="https://wa.me/5522998192184">
                            <img src="https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white" alt="whatsapp" class="mb-3">
                        </a>
                        
                        <a href="https://www.instagram.com/lucas_f_pas/?next=%2F">
                            <img src="https://img.shields.io/badge/Instagram-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white" alt="instagram" class="mb-3">
                        </a>
                        
                        <a href="https://github.com/LucasPaschoal/">
                            <img src="https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" class="mb-3">
                        </a>
                        
                        <a href="https://www.linkedin.com/in/lucas-ferreira-8bb281248/">
                            <img src="https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn" class="mb-3">
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>        
    @endsection
</x-app>
