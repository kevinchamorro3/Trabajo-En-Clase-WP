<?php get_header(); ?>
<div class="container mx-auto m-5 border-4 border-blue-900 rounded-md">
    <h1 class="text-3xl md:text-7xl text-blue-900 text-center font-mono font-black">Mi Presentación</h1>
</div>
<div class="container mx-auto m-5 pl-5">
    <h2 class="text-xl md:text-4xl text-blue-500 text-left font-mono font-black">Descripción breve</h2>
</div>
<div class="container mx-auto bg-green-100">
    <img class="float-left md:float-left w-40 m-4 rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/perfil-kevin.jpg" alt="Foto de perfil Kevin">
    <p class="text-justify text-base md:text-2xl m-4">
        Mi nombre es Kevin Chamorro tengo 27 años, vivo en la ciudad de Quito. Actualmente estudio Analisis de sistemas en el Instituto Tecnológico Quito.
        Curso el sexto semestre de esta carrera la cual estoy a punto de concluir. En el futuro me gutaria poder seguir estudiando y poder mejorar profesionalmente, 
        sobretodo centrarme en el desarrollo de software y más en concreto en el desarrollo web y movil.
    </p>
</div>
<div class="container bg-fixed mx-auto m-5 p-5" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/laptop.jpg)">
    <h2 class="text-xl md:text-4xl text-white text-left font-mono font-black mb-4">Herramientas y Lenguajes preferidos</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <div class="border-4 border-green-300 rounded-md">
            <div>
                <img class="w-40 mx-auto mt-4 rounded-full bg-white transition duration-500 ease-in-out hover:bg-green-300" src="<?php echo get_template_directory_uri()?>/assets/img/html.png" alt="icono HTML">
            </div>
            <div>
                <h3 class="text-xl md:text-3xl text-white text-center font-mono font-black pt-4">HTML 5</h3>
            </div>
            <div>
                <p class="text-justify text-white text-base md:text-xl p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est libero quasi reprehenderit? Reprehenderit eius porro voluptatibus quo quam corporis voluptatem error eveniet, ad deleniti hic, nostrum sed architecto! Sunt!
                </p>
            </div>
        </div>
        <div class="border-4 border-green-300 rounded-md">
            <div>
                <img class="w-40 mx-auto mt-4 rounded-full bg-white transition duration-500 ease-in-out hover:bg-green-300" src="<?php echo get_template_directory_uri()?>/assets/img/php.png" alt="Icono php">
            </div>
            <div>
                <h3 class="text-xl md:text-3xl text-white text-center font-mono font-black pt-4">PHP</h3>
            </div>
            <div>
                <p class="text-justify text-white text-base md:text-xl p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est libero quasi reprehenderit? Reprehenderit eius porro voluptatibus quo quam corporis voluptatem error eveniet, ad deleniti hic, nostrum sed architecto! Sunt!
                </p>
            </div>
        </div>
        <div class="border-4 border-green-300 rounded-md">
            <div>
                <img class="w-40 mx-auto mt-4 rounded-full bg-white transition duration-500 ease-in-out hover:bg-green-300" src="<?php echo get_template_directory_uri()?>/assets/img/wp.png" alt="icono wordpress">
            </div>
            <div>
                <h3 class="text-xl md:text-3xl text-white text-center font-mono font-black pt-4">WordPress</h3>
            </div>
            <div>
                <p class="text-justify text-white text-base md:text-xl p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est libero quasi reprehenderit? Reprehenderit eius porro voluptatibus quo quam corporis voluptatem error eveniet, ad deleniti hic, nostrum sed architecto! Sunt!
                </p>
            </div>
        </div>
        <div class="border-4 border-green-300 rounded-md">
            <div>
                <img class="w-40 mx-auto mt-4 rounded-full bg-white transition duration-500 ease-in-out hover:bg-green-300" src="<?php echo get_template_directory_uri()?>/assets/img/mysql.png" alt="icono mysql">
            </div>
            <div>
                <h3 class="text-xl md:text-3xl text-white text-center font-mono font-black pt-4">MySQL</h3>
            </div>
            <div>
                <p class="text-justify text-white text-base md:text-xl p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est libero quasi reprehenderit? Reprehenderit eius porro voluptatibus quo quam corporis voluptatem error eveniet, ad deleniti hic, nostrum sed architecto! Sunt!
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>