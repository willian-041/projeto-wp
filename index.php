<?php get_header(); ?>
<main class="container my-5">

<body style=" background: radial-gradient(circle,rgb(9, 9, 9) 0%,rgb(10, 10, 10) 100%);">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div style="text-align: center;">
<img src="<?php echo get_template_directory_uri(); ?>/asset/imagem6.jpeg" alt="Logo" width="40%" class="rounded-circle">
</div>

    <p class="text-center"></p>
</main>
<div class="container">
<div class="row">



<div class="col-md-12 text-start" style="color: aliceblue;">
    <p>Academia especializada em luta agarrada. Fundamento e tecnica do grappling, Aqui trabalhamos com os melhores atletas mostrando o melhor da arte suave jiu-jitsu e a agrecividade e força do wrestling. Sempre contruindo novos atletas com o melhor conhecimento, e tambem otimos alunos que procuram um bom esrpotes de luta para seu lazer e condicionamento fisico.</p>
</div>

<style>
        .custom-container {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
        }
        .custom-container:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .container-1 {
            background: linear-gradient(135deg,rgb(150, 150, 150),rgb(45, 45, 45));
            color: white;
            padding: 40px;
            text-align: center;
        }
        .container-2 {
            background: linear-gradient(135deg,rgb(45, 44, 44),rgb(114, 114, 114));
            color: white;
            padding: 40px;
            text-align: center;
        }
    </style>
<body>
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="custom-container container-1">
                    <h2>JIU-JITSU</h2>
                    <p>Este é um belo container responsivo com efeito ao passar o mouse.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-container container-2">
                    <h2>WRESTLING</h2>
                    <p>Outro container estiloso para destacar informações importantes.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<section class="hero text-center text-white d-flex align-items-center" style="height: 20vh; background: url('<?php echo get_template_directory_uri(); ?>/assets/banner.jpg') center/cover;">
</section>


<section id="servicos" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Nossos Serviços</h2>

        
        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/servico1.jpg" class="card-img-top" alt="Serviço 1">
                    <div class="card-body">
                        <h5 class="card-title">Serviço 1</h5>
                        <p class="card-text">Descrição breve do serviço.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/servico2.jpg" class="card-img-top" alt="Serviço 2">
                    <div class="card-body">
                        <h5 class="card-title">Serviço 2</h5>
                        <p class="card-text">Descrição breve do serviço.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/servico3.jpg" class="card-img-top" alt="Serviço 3">
                    <div class="card-body">
                        <h5 class="card-title">Serviço 3</h5>
                        <p class="card-text">Descrição breve do serviço.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="depoimentos" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">O que nossos clientes dizem</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <p>“Ótimo serviço, muito profissional!”</p>
                    <small>- Rodrigo Brokys</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <p>“Super recomendo, trabalho incrível!”</p>
                    <small>- Amanda Silva</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <p>“Minha experiência foi excelente!”</p>
                    <small>- Cliente 3</small>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>