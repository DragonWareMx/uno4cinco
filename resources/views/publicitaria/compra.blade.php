<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

        {{-- CSS COMPRA --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/compra.css') }}">

        <!-- Fuentes -->
        <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    </head>
    <body>
        <form>
            <div class="container-fluid">
                <div class="row">
                    <div class="compra-header">
                        <a href="{{ route('inicio') }}" class="logo">
                            <img class="logonovedades" src="{{ asset('img/logos/logo.png') }}">
                        </a>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="compra-table">
                        <div class="compra-cell cell-80">
                            <div class="formulario-container">
                                {{-- NOMBRE --}}
                                <div class="row row-m">
                                    <div class="col-sm">
                                        <div class="field">
                                            <input type="text" autocomplete="on" id="fname"  name="fname" value="" onchange="this.setAttribute('value', this.value);" required>
	                                        <label for="fname" title="Nombre" data-title="Nombre"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="field">
                                            <input type="text" autocomplete="off" id="lname" name="lname" value="" onchange="this.setAttribute('value', this.value);" required>
	                                        <label for="lname" title="Apellidos" data-title="Apellidos"></label>
                                        </div>
                                    </div>
                                </div>

                                {{-- CORREO --}}
                                <div class="row row-p">
                                    <div class="field">
                                        <input type="email" autocomplete="on" id="email" name="email" value="" onchange="this.setAttribute('value', this.value);" required>
                                        <label for="email" title="Correo electrónico" data-title="Correo electrónico"></label>
                                    </div>
                                </div>

                                {{--EDAD Y GENERO--}}
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="field">
                                            <input type="number" autocomplete="on" id="age"  name="age" value="" onchange="this.setAttribute('value', this.value);" required>
	                                        <label for="age" title="Edad" data-title="Edad"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="field">
                                            <select name="genero" id="genero" value="">
                                                <option value="Elegir" id="AF">Elegir opción</option>
                                                <option value="Hombre" id="H">Hombre</option>
                                                <option value="Mujer" id="M">Mujer</option>
                                                <option value="Otro" id="0">Otro</option>
                                            </select>
                                            <label for="genero" title="Género" data-title="Género"></label>
                                        </div>
                                    </div>
                                </div>

                                {{-- PAIS Y ESTADO --}}
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="field">
                                            <select name="country" class="countries" id="countryId">
                                                <option value="">Select Country</option>
                                            </select>
                                            <label for="countryId" title="País" data-title="País"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="field">
                                            <select name="state" class="states" id="stateId">
                                                <option value="">Select State</option>
                                            </select>
                                            <label for="stateId" title="Estado" data-title="Estado"></label>
                                        </div>
                                    </div>
                                </div>

                                {{-- CIUDAD --}}
                                <div class="row row-p">
                                    <div class="field">
                                        <input type="text" autocomplete="on" id="ciudad" name="ciudad" value="" onchange="this.setAttribute('value', this.value);" required>
                                        <label for="ciudad" title="Ciudad" data-title="Ciudad"></label>
                                    </div>
                                </div>

                                <label for="envio">Método de envío:</label><br>
                                <select id="envio" name="envio" form="envioForm"><br>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select><br>
                            </div>
                        </div>

                        <div class="compra-cell cell-20">
                            <div class="compra-container row-m">
                                <h1>Detalles de la compra</h1>
                                <div class="productos-compra">
                                    <div class="producto-table">
                                        <div class="producto-row">
                                            <div class="producto-cell imagen-producto">
                                                <p><b>Imagen</b></p>
                                            </div>
                                            <div class="producto-cell contenido-producto">
                                                <p><b>Producto</b></p>
                                            </div>
                                            <div class="producto-cell contenido-producto">
                                                <p><b>Cantidad</b></p>
                                            </div>
                                            <div class="producto-cell contenido-producto-sm">
                                                <p><b>Subtotal</b></p>
                                            </div>
                                        </div>
                                        <div class="producto-row">
                                            <div class="producto-cell imagen-producto">
                                                <img src="{{ asset('/storage/libros/agustinC.JPG') }}">
                                            </div>
                                            <div class="producto-cell contenido-producto">
                                                <p>Estos poemas culeros que son lo menos culero que tengo</p>
                                            </div>
                                            <div class="producto-cell contenido-producto">
                                                <p>1</p>
                                            </div>
                                            <div class="producto-cell contenido-producto-sm">
                                                <p>$200.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="producto-table">
                                        <div class="producto-row">
                                            <div class="totales">
                                                <p>Subtotal</p><p>$200</p>
                                            </div>
                                            <div class="totales">
                                                <p>Envío</p><p>$200</p>
                                            </div>
                                            <div class="totales">
                                                <p>Total</p><p>$200</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Realizar compra">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script src="//geodata.solutions/includes/countrystatecity.js"></script>

        <script>
            
        </script>
    </body>
</html>