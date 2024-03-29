@extends('layouts.layoutPubli')

@section('header')
<title>Autores | uno4cinco</title>

<link rel="stylesheet" type="text/css" href="/assets/css/style_SobreNosotros.css">
<link rel="stylesheet" type="text/css" href="/assets/css/style_Autores.css">
<link rel="stylesheet" type="text/css" href="/assets/css/blogs.css">
<link rel="stylesheet" type="text/css" href="/assets/css/tienda.css">
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" type="text/css">
<!--BOOTSTRAP-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="assetsTimer/fonts/fontawesome/font-awesome.min.css">

		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="assetsTimer/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="assetsTimer/vendors/YTPlayer/css/jquery.mb.YTPlayer.min.css">
		<link rel="stylesheet" type="text/css" href="assetsTimer/vendors/vegas/vegas.min.css">
        <!-- App & fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Work+Sans:300,400,500,700">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="assetsTimer/css/main.css"><!--[if lt IE 9]-->
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
@endsection

@section('content')

<section class="section" id="about" style="width:100%; height:100%; background-color:#F2ECD5">
    {{-- TITTLE --}}
    <p class="txt-TitulosApartados">Autores | uno4cinco</p>
    <hr class="hr-Titulos-long">
    <hr class="hr-Titulos-small">

    
    <div class="blog_encabezado">
        <p class="txt-descripApartado">Autores que han publicado en uno4cinco<p>
        {{-- <form class="" action="{{ route('autoresUno4cinco')}}" method="GET" enctype="multipart/form-data">
            <div class="blog_barra_busqueda">
                <select class="busqueda_clasificacion" name="clasificacion" id="tipos_blogs">
                    <option value="nombre">Nombre</option>
                    <option value="descripcion">Descripción</option>
                    <option value="obras">Obras</option>
                </select>
                <input type="text" required id="busqueda_busqueda" class ="" name="busqueda">
                <button type="submit" class="busqueda_boton">
                    <img class="imagen_busqueda_boton" src="{{asset('img/ico/search.png')}}" alt=""> 
                </button>
            </div>
        </form> --}}

        <form action="{{ route('autoresUno4cinco')}}" method="GET" enctype="multipart/form-data">
            <div class="blog_barra_busqueda" style="border:none">
            <select class="busqueda_clasificacion" name="filtro" id="tipos_blogs">
                <option value="" disabled selected>Filtrar</option>
                <option value="todos">Ver todos</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="Ñ">Ñ</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="X">X</option>
                <option value="Y">Y</option>
                <option value="Z">Z</option>
            </select>
            <button type="submit" class="busqueda_boton">
                <img class="imagen_busqueda_boton" src="{{asset('img/ico/search.png')}}" alt=""> 
            </button>
            </div>
        </form>
    </div>
    

    
    <div class="div_ContenedorAutores">
        @if (sizeOf($autoruno4cinco)==0)
            No hay autores para mostrar
        @endif
        @foreach($autoruno4cinco as $uno4cinco)
        <div class="div_autoresTotal">
            <div  class="img_autoresGral" style="background: url('{{asset('storage/autores/'.$uno4cinco->foto)}}') center center no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -webkit-background-size: cover;">
                <div class="hover_autores_item_imagen">
                    <div class="leer_mas_boton_autores">
                    <a href="{{ route('autor', ['id'=>$uno4cinco->id])}}" style="width: 100%">Leer más</a>
                    </div>
                </div>
            </div> 
            <p class="txt_nombreAutor">{{Str::limit($uno4cinco->nombre,25)}}<p>
        </div>
        @endforeach
        
    </div>
    <div class="paginate-tienda">
        <div style="width: fit-content; margin:auto;">
        {{ $autoruno4cinco->links() }}
        </div>
    </div>
    
    


</section>
@endsection