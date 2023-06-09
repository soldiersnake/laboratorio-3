<?php
    include './manejoSesion.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario BBDD</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div id="contenedor">
        <header>
            <h2>ABM form's - Pokemon</h2>
            <div id="botones">

                <button class="btnHeader" id="cargar">Cargar</button>
                <button class="btnHeader" id="vaciar">Vaciar</button>
                <button class="btnHeader" id="limpiarFiltros">Limpiar</button>
                <button class="btnHeader" id="alta">Alta</button>
                <button class="btnHeader" id="cerrarSesion">Cerrar Sesion</button>
            </div>
        </header>
        <table>
            <thead>
                <tr>
                    <th campo-dato="id" class="th" id="thId">ID</th>
                    <th campo-dato="nombre" class="th" id="thNombre">Nombre</th>
                    <th campo-dato="tipo" class="th" id="thTipo">Tipo</th>
                    <th campo-dato="ataque" class="th" id="thAtaque">Ataque principal</th>
                    <th campo-dato="debilidad" class="th" id="thPrecio">Debilidad</th>
                    <th campo-dato="pdf" class="th" id="thPdf">Pdf's</th>
                    <th campo-dato="modificacion" class="th" id="thPrecio">Modificacion</th>
                    <th campo-dato="baja" class="th" id="thPrecio">Baja</th>
                </tr>
                <tr>
                    <td campo-dato="id" class="th"><input id="filtroId" type="text"></td>
                    <td campo-dato="nombre" class="th"><input id="filtroNombre" type="text"></td>
                    <td campo-dato="tipo" class="th"><select id="filtroTipo"></select></td>
                    <td campo-dato="ataque" class="th"><input id="filtroAtaque" type="text"></td>
                    <td campo-dato="debilidad" class="th"><input id="filtroDebilidad" type="text"></td>
                    <td campo-dato="pdf" class="th"></td>
                    <td campo-dato="modificacion" class="th"></td>
                    <td campo-dato="baja" class="th"></td>
                </tr>

            </thead>
            <tbody id="tabla">

            </tbody>
        </table>
        <footer>
            <h2>
                Mariano Macias - Laboratorio 3
            </h2>
        </footer>


    </div>

    <!-- VENTANA MODAL -->
    <div class="VentanaModal" id="modal">
        <div class="headerVentanaModal">
            <h3 class="itemMid">Formulario de alta</h3>
            <button class="btnCerrarModal">X</button>
        </div>
        <div class="formulario-modal">
            <!-- FORM ALTA -->
            <form action="alta.php" method="post" id="myForm" enctype="multipart/form-data">
                <div class="inputsForm">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="inputsForm">
                    <label for="tipo">Tipo:</label>
                    <select name="tipo" id="filtroTipoModal" required>

                    </select>
                </div>
                <div class="inputsForm">
                    <label for="ataque">Ataque Principal:</label>
                    <input type="txt" id="ataque" name="ataque" required>
                </div>
                <div class="inputsForm" style="margin-top: 1%;">
                    <label for="debilidad">Debilidad:</label>
                    <input type="text" id="debilidad" name="debilidad" required>
                </div>
                <div class="inputsForm" style="margin-top: 1%;">
                    <label for="pdf">Imagen:</label>
                    <input type="file" id="pdf" name="pdf" accept=".pdf">
                </div>
                <button class="btnForm" type="submit">
                    Enviar
                </button>
            </form>

        </div>
    </div>

    <!-- VENTANA MODAL MODIFICACION-->
    <div class="VentanaModal" id="modalModi">
        <div class="headerVentanaModal">
            <h3 class="itemMid">Formulario de Modificacion</h3>
            <button class="btnCerrarModal">X</button>
        </div>
        <div class="formulario-modal">
            <form action="modi.php" method="post" id="myFormModi">
                <input type="hidden" id="idModi" name="idModi">
                <div class="inputsForm">
                    <label for="nombreModi">Nombre:</label>
                    <input type="text" id="nombreModi" name="nombreModi" required>
                </div>
                <div class="inputsForm">
                    <label for="tipoModi">Tipo:</label>
                    <select name="tipoModi" id="filtroTipoModalModi">
                    </select>
                </div>
                <div class="inputsForm">
                    <label for="ataqueModi">Ataque Principal:</label>
                    <input type="txt" id="ataqueModi" name="ataqueModi" required>
                </div>
                <div class="inputsForm" style="margin-top: 1%;">
                    <label for="debilidadModi">Debilidad:</label>
                    <input type="text" id="debilidadModi" name="debilidadModi" required>
                </div>
                <div class="inputsForm" style="margin-top: 1%;">
                    <label for="pdfModi">Imagen:</label>
                    <input type="file" id="pdfModi" name="pdfModi">
                </div>
                <button class="btnForm" type="submit" id="btnEnviarModi" onclick="modificarPokemon(event)">
                    Enviar Modificacion
                </button>
            </form>
        </div>
    </div>

    <!-- VENTANA MODAL DE IFRAME -->
    <div class="VentanaModal" id="modalIframe">
        <div class="headerVentanaModal">
            <h3 class="itemMid">Iframe de PDF</h3>
            <button class="btnCerrarModal">X</button>
        </div>
        <div class="formulario-modal2">

            <button class="cerrarIframe">
                CERRAR
            </button>
        </div>
    </div>


</body>

</html>
<script src="../../jquery.js"></script>
<script>

    var flag = 0;

    $(document).ready(() => {

        $("#thId").click(() => {
            $("#orden").val("id");
        });
        $("#thDescription").click(() => {
            $("#orden").val("description");
        });
        $("#thMarca").click(() => {
            $("#orden").val("marca");
        });
        $("#thModelo").click(() => {
            $("#orden").val("modelo");
        });
        $("#thPrecio").click(() => {
            $("#orden").val("precio");
        });

        // Realizar la petición AJAX para obtener los tipos
        $.ajax({
            type: "GET",
            url: "salidaJsonFamilias.php",
            success: (respuestaServer) => {
                // Convertir la respuesta en un arreglo de tipos
                const tipos = JSON.parse(respuestaServer);
                // Eliminar duplicados y ordenar los tipos alfabéticamente
                const tiposUnicos = [...new Set(tipos)].sort();
                // Mostrar los tipos en una alerta
                alert("Tipos: " + tiposUnicos.join(", "));
                // Llenar el select del filtroTipo con los tipos únicos
                const filtroTipo = $("#filtroTipo");
                filtroTipo.empty();
                tiposUnicos.forEach((tipo) => {
                    filtroTipo.append($("<option></option>").text(tipo));
                });

                const filtroTipoModal = $("#filtroTipoModal");
                filtroTipoModal.empty();
                tiposUnicos.forEach((tipo) => {
                    filtroTipoModal.append($("<option></option>").text(tipo));
                });

                // Llenar el select del filtroTipoModalModi con los tipos únicos
                const filtroTipoModalModi = $("#filtroTipoModalModi");
                filtroTipoModalModi.empty();
                tiposUnicos.forEach((tipo) => {
                    filtroTipoModalModi.append($("<option></option>").text(tipo));
                });

            }
        });

        $("#cargar").click(() => {
            console.log("cargando...");
            $("#tabla").empty();
            $("#tabla").html("<h3><i>Cargando datos...</i></h3>");

            $.ajax({
                type: "GET",
                url: "salidaJsonFamilias.php",
                success: (respuestaServer) => {
                    const opcionesTipo = $("#filtroTipo");
                    opcionesTipo.empty(); // Limpiar las opciones existentes
                    // Agregar las opciones obtenidas del servidor
                    opcionesTipo.append(respuestaServer);
                    alert(respuestaServer);
                    console.log("cargando...");
                    $("#tabla").empty();
                    $("#tabla").html("<h3><i>Cargando datos...</i></h3>");
                    $.ajax({
                        type: "GET",
                        url: "salidaJsonArticulos.php",
                        success: (respuestaServer) => {
                            console.log(respuestaServer);
                            const objJson = JSON.parse(respuestaServer);
                            // Obtener los tipos de la respuesta del servidor
                            const tipos = objJson.map((valor) => valor.tipo);
                            // Eliminar duplicados y ordenar los tipos alfabéticamente
                            const tiposUnicos = [...new Set(tipos)].sort();
                            // Llenar el select del filtroTipo con los tipos únicos
                            const filtroTipo = $("#filtroTipo");
                            filtroTipo.empty();
                            tiposUnicos.forEach((tipo) => {
                                filtroTipo.append($("<option></option>").text(tipo));
                            });
                            $("#tabla").empty();
                            objJson.forEach((valor) => {
                                const objTr = document.createElement("tr");
                                const tdId = document.createElement("td");
                                tdId.innerHTML = valor.id;
                                objTr.appendChild(tdId);
                                const tdNombre = document.createElement("td");
                                tdNombre.innerHTML = valor.nombre;
                                objTr.appendChild(tdNombre);
                                const tdTipo = document.createElement("td");
                                tdTipo.innerHTML = valor.tipo;
                                objTr.appendChild(tdTipo);
                                const tdAtaque = document.createElement("td");
                                tdAtaque.innerHTML = valor.ataque_principal;
                                objTr.appendChild(tdAtaque);
                                const tdDebilidad = document.createElement("td");
                                tdDebilidad.innerHTML = valor.debilidad;
                                objTr.appendChild(tdDebilidad);
                                const tdPdf = document.createElement("td");
                                const botonPdf = document.createElement("button");
                                botonPdf.innerText = "PDF";
                                botonPdf.addEventListener("click", btnPDF);
                                botonPdf.dataset.pokemon = JSON.stringify(valor);
                                tdPdf.appendChild(botonPdf);
                                objTr.appendChild(tdPdf);
                                const tdModi = document.createElement("td");
                                const botonModi = document.createElement("button");
                                botonModi.innerText = "Modi";
                                botonModi.setAttribute("data-id", valor.id);
                                botonModi.addEventListener("click", btnModi);
                                tdModi.appendChild(botonModi);
                                objTr.appendChild(tdModi);
                                const tdBaja = document.createElement("td");
                                const botonBaja = document.createElement("button");
                                botonBaja.innerText = "Baja";
                                botonBaja.addEventListener("click", () => btnBaja(valor.id));
                                tdBaja.appendChild(botonBaja);
                                objTr.appendChild(tdBaja);
                                $("#tabla").append(objTr);
                            });
                        }
                    });
                }
            });
        });

        // ALTA CRUD
        $("#myForm").submit((event) => {
            event.preventDefault();
            console.log(event);
            console.log('mensaje prueba');
            // Construye el mensaje de confirmación
            const mensaje = `¿Deseas cargar los siguientes datos?`;
            if (confirm(mensaje)) {
                const data = new FormData($('#myForm')[0]);
                $.ajax({
                    type: 'POST',
                    method: 'post',
                    enctype: 'multipart/form-data',
                    url: 'alta.php',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: data,
                    success: (respuestaServer, estado) => {
                        console.log(respuestaServer);
                        // window.location.href = "index.php";
                    }
                });
            } else {
                alert('No se cargara el pokemon');
            }
        });


        // BAJA
        function btnBaja(idPokemon) {
            if (confirm("¿Deseas eliminar este Pokémon?")) {
                $.ajax({
                    type: 'POST',
                    url: 'baja.php',
                    data: { id: idPokemon },
                    success: (respuestaServer, estado) => {
                        console.log(respuestaServer);
                        // Disparar el evento clic del botón "Cargar"
                        $("#cargar").trigger("click");
                    }
                });
            }
        }

        // ACCION DE VENTANA MODAL
        $("#alta").click(() => {
            $("#contenedor").addClass("modal-open");
            $("#modal").addClass('.mostrar');
            $("#modal").show();
        });
        $(".btnCerrarModal").click(() => {
            $("#contenedor").removeClass("modal-open");
            $(".VentanaModal").hide();
        });
        // ACCION DE VENTANA MODALMODIFICACION
        $("#modalModi .btnCerrarModal").click(() => {
            $("#contenedor").removeClass("modal-open");
            $("#modalModi").hide();
        });
        $("#btnEnviarModi").click(() => {
            $("#contenedor").removeClass("modal-open");
        });
    });

    $("#vaciar").click(() => {
        $("#tabla").empty();
        flag = 0;
    });
    function btnPDF(e) {
    // Obtén el elemento que recibió el clic (el botón)
    const boton = e.target;
    // Obtén los datos del pokemon del atributo "data-pokemon" del botón
    const pokemon = JSON.parse(boton.dataset.pokemon);
    // Obtén el ID del pokemon
    const id = pokemon.id;
    console.log(id);

    $.ajax({
        type: "GET",
        url: "./verPdf.php",
        data: { id: id },
        success: function(respuestaServer) {
            const objetoDato = JSON.parse(respuestaServer);
            const documentoPDF = objetoDato.documentoPDF;
            console.log(documentoPDF);

            $("#modalIframe").show();
           // Insertar el iframe en la clase formulario-modal2
           // Crear el iframe y establecer los atributos
           const iframeHTML = "<iframe width='100%' height='800px' src='data:application/pdf;base64," + documentoPDF + "'></iframe>";

            // Insertar el iframe en la clase formulario-modal2
            $('.formulario-modal2').html(iframeHTML);
            // Abre la ventana modal
            $("#contenedor").addClass("modal-open");
            $("#modalIframe").addClass('mostrar');
        }
    });
};

    $(".cerrarIframe").click(() => {
        $("#modalIframe").hide();
        $("#contenedor").removeClass("modal-open");
    })

    // cargo MODIFICACION
    function btnModi(event) {
        const idPokemon = event.target.getAttribute("data-id");
        // Asignar el id del Pokémon al campo oculto en el formulario de modificación
        $("#idModi").val(idPokemon);
        // Obtén los atributos del Pokémon mediante una petición AJAX
        $.ajax({
            type: "POST",
            url: "modi.php",
            data: { id: idPokemon },
            success: function (respuestaServer) {
                const pokemon = JSON.parse(respuestaServer);
                // Llenar los campos de la ventana modal de modificación con los atributos del Pokémon
                $("#nombreModi").val(pokemon.nombre);
                $("#filtroTipoModalModi").find('option').filter(function () {
                    return $(this).text() === pokemon.tipo;
                }).prop('selected', true);
                $("#ataqueModi").val(pokemon.ataque_principal);
                $("#debilidadModi").val(pokemon.debilidad);
                // Mostrar la ventana modal de modificación aqui
                $("#contenedor").addClass("modal-open");
                $("#modalModi").show();
            }
        });
    }

    // ENVIO DE LA MODIFICACIÓN
    function modificarPokemon(event) {
        event.preventDefault();  // Evita el envío normal del formulario

        var idPokemon = $("#idModi").val();
        var nombre = $("#nombreModi").val();
        var tipo = $("#filtroTipoModalModi").val();
        var ataque = $("#ataqueModi").val();
        var debilidad = $("#debilidadModi").val();
        // Para la imagen necesitarás procesarla adecuadamente en tu servidor.
        $.ajax({
            type: "POST",
            url: "modi.php",
            data: { id: idPokemon, nombre: nombre, tipo: tipo, ataque: ataque, debilidad: debilidad },
            success: function (respuestaServer) {
                // Aquí puedes procesar la respuesta del servidor, por ejemplo:
                console.log(respuestaServer);
                if (respuestaServer === "Actualizado con éxito") {
                    // Cierra el modal y actualiza la lista de Pokémons
                    $("#modalModi").hide();
                    cargarPokemons();  // Suponiendo que tienes una función que carga la lista de Pokémons
                    if (respuestaServer === "Actualizado con éxito") {
                        // Cierra el modal y actualiza la lista de Pokémons
                        $("#modalModi").hide();
                        location.reload();
                        // Disparar el evento clic del botón "Cargar"
                        $("#cargar").trigger("click");
                    }
                } else {
                    // Muestra un mensaje de error
                    alert("Error al actualizar el Pokémon: " + respuestaServer);
                }
            }
        });
        // Disparar el evento clic del botón "Cargar"
        $("#cargar").trigger("click");
    }

    // CERRAR SESSION
    $(document).ready(()=>{
        $('#cerrarSesion').click(()=>{
            location.href = "../destruirSesion.php"
        })
    })

</script>