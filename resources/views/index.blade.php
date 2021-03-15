<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
</head>
<body>
	<h1>Galeria de Imagens com Lightbox</h1>

	<div class="gallery">
		<a href="{{ asset('img/pic1.jpg') }}" data-lightbox="mygallery" data-title="Coala"><img src="{{ asset('img/pic1-small.jpg') }}"></a>
		<a href="{{ asset('img/pic2.jpg') }}" data-lightbox="mygallery" data-title="Elefante"><img src="{{ asset('img/pic2-small.jpg') }}"></a>
		<a href="{{ asset('img/pic3.jpg') }}" data-lightbox="mygallery" data-title="Esquilo"><img src="{{ asset('img/pic3-small.jpg') }}"></a>
		<a href="{{ asset('img/pic4.jpg') }}" data-lightbox="mygallery" data-title="Arara"><img src="{{ asset('img/pic4-small.jpg') }}"></a>
		<a href="{{ asset('img/pic5.jpg') }}" data-lightbox="mygallery" data-title="Suricato"><img src="{{ asset('img/pic5-small.jpg') }}"></a>
	</div>

</body>
</html>