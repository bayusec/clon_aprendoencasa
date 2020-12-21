<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Aprendo en casa ofrece experiencias de aprendizaje, herramientas y recursos educativos orientados a favorecer los aprendizajes.">
    <meta name="author" content="Ministerio de Educación del Perú">
    <meta name="copyright" content="© 2020 Minedu">
    <meta name="distribution" content="global">
    <meta property="og:title" content="Aprendo en casa: Plataforma educativa | Minedu">
    <meta property="og:image" content="http://www.perueduca.pe/documents/10179/302087541/aprendo_en_casa_minedu.jpg">
    <meta property="og:description" content="Aprendo en casa ofrece experiencias de aprendizaje, herramientas y recursos educativos orientados a favorecer los aprendizajes.">
    <meta property="og:url" content=" https://aprendoencasa.pe/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MineduPeru">
    <meta name="twitter:creator" content="@MineduPeru">
    <meta name="twitter:title" content=" Aprendo en casa: plataforma educativa | Minedu">
    <meta name="twitter:description" content="Aprendo en casa ofrece experiencias de aprendizaje, herramientas y recursos educativos orientados a favorecer los aprendizajes.">
    <meta name="twitter:image" content=" http://www.perueduca.pe/documents/10179/302087541/aprendo_en_casa_minedu.jpg">
    <title>Aprendo en casa: Plataforma educativa | Minedu</title>
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <script type="application/javascript" src="{{url('js/manifest.js')}}"></script>
    <script type="application/javascript" src="{{url('js/vendor.js')}}"></script>
    <script type="application/javascript" src="{{url('js/app.js')}}"></script>
</head>
<body>
@include('layouts/header')
@isset($nabvar)
    @include('layouts/navbar')
@endisset

@yield('content')
@include('layouts/footer')
</body>
</html>