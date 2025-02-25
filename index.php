<?php get_header(); ?>
<main class="container my-5">
    <div class="text-center">
        <h1>BOMB</h1>
    </div>
    <p class="text-center">Conceito street-wear underground CWB. Peças autenticas e aqui só os verdadeiro das ruas!</p>
</main>
<div class="container">
<div class="row">

<div class="col-md-12 text-start">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>

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
                    <small>-Walter Shoots</small>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>