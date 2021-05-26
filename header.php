<!DOCTYPE html>
<html lang="en" class="flex w-full h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body class="flex flex-col w-full h-full">
    <header>
        <nav class="flex items-center justify-between p-10 bg-gray-50">
            <div class="w-1/12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo giothcode">
            </div>
            <div class="text-2xl">
                Analista de sistemas
            </div>
        </nav>
    </header>