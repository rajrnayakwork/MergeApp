<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MergeApp</title>
    @viteReactRefresh
    @vite('resources/sass/app.scss')
</head>

<body>
    <div id="app"></div>

    @vite('resources/js/app.jsx')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>

</html>