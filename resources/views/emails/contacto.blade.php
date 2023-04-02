<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <section class="bg-green-500">
        <div class="p-8">
            <div class="mb-2">
                <p><strong>Nombre y apellidos: </strong> {{$contacto['name']}} {{$contacto['lastname']}}</p>
            </div>
            <div class="mb-2">
                <p><strong>Celular: </strong>{{$contacto['celular']}}</p>
            </div>
            <div class="mb-2">
                <p><strong>Correo: </strong>{{$contacto['correo']}}</p>
            </div>
            <div class="mb-2">
                <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>
            </div>
        </div>
        <div class="mt-4 text-white font-bold text-center">
            <small class="text-green-900">© {{ date('Y') }} Oral Beauty. Todos los derechos reservados.</small>
        </div>
    </section>
</body>
