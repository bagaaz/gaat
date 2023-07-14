<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>G.A.A.T - Grupo Aracruzense de Airsoft Tático</title>
</head>
<body class="bg-white text-gray-950">
    <header class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
        <a href="/">
            <img class="h-24 w-auto" src="/img/logo_gaat.png" alt="Logo da G.A.A.T">
        </a>
        <nav>
            <ul class="flex">
                <li class="mx-3"><a class="font-bold text-xl text-green-dark hover:text-green-medium" href="#home">Home</a></li>
                <li class="mx-3"><a class="font-bold text-xl text-green-dark hover:text-green-medium" href="#sobre">Sobre</a></li>
                <li class="mx-3"><a class="font-bold text-xl text-green-dark hover:text-green-medium" href="#campos">Campos</a></li>
                <li class="mx-3"><a class="font-bold text-xl text-green-dark hover:text-green-medium" href="#jogos">Jogos</a></li>
                <li class="mx-3"><a class="font-bold text-xl text-green-dark hover:text-green-medium" href="#contato">Contato</a></li>
            </ul>
        </nav>
        <a href="#">
            <div class="bg-green-dark hover:bg-green-medium text-white font-bold py-2 px-4 rounded-full">Entrar</div>
        </a>
    </header>
    
    <script>
        fetch('/build/manifest.json')
            .then(response => response.json())
            .then(data => {
                const cssObject = data["resources/css/app.css"]
                const jsObject = data["resources/js/app.js"]

                const css = document.createElement('link')
                css.setAttribute('rel', 'stylesheet')
                css.setAttribute('href', `/build/${cssObject.file}`)
                css.setAttribute('type', 'text/css')
                const head = document.querySelector('head')
                head.appendChild(css)

                const js = document.createElement('script')
                js.setAttribute('src', `/build/${jsObject.file}`)
                const body = document.querySelector('body')
                body.appendChild(js)
            })
    </script>
</body>
</html>