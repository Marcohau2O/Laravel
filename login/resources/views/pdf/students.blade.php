<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
            color: #333;
            text-align: center; /* Alinear contenido al centro */
        }

        h1 {
            color: #007bff;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        /* Estilos específicos para los detalles del estudiante */
        .student-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>



<div class="">
    <img src="{{$imagen_student}}" style=" height: 5cm; width:  5cm; margin-left:1cm;">
    <h3>Detalles del Estudiante: {{ $student->name_student }}</h3>
    <ul>
        <li><strong>Matrícula:</strong> {{ $student->id }}</li>
    </ul>


    <h2>Calificaciones</h2>
    <table>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bases de Datos Para Cómputo en la Nube</td>
                <td>80</td>
            </tr>
            <tr>
                <td>Aplicaciones De IOT</td>
                <td>100</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
