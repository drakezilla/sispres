<h1>Enunciado</h1>
<p>
    Imaginemos que un cliente solicita que le contactemos en relación con una
Hipoteca. Mediante una llamada a la API REST almacenarlo en la base de
datos.
</p>
<p>La solicitud de hipoteca debe contener:</p>
<ul>
    <li>Nombre y apellidos del cliente</li>
    <li>Email</li>
    <li>Teléfono</li>
    <li>Ahorros aportados</li>
    <li>Precio de Compra</li>
    <li>Fecha de solicitud</li>
</ul>
<p>
    Una vez tenemos guardada la información de la solicitud de la hipoteca, debe
asignarse a un experto hipotecario que tengamos dado de alta en el sistema
de forma aleatoria.
</p>

<p>
    Por otro lado, nuestros <strong>expertos hipotecarios</strong> mediante su aplicación,
necesitan obtener el listado de solicitudes a gestionar. Es necesario contar con
un endpoint que reciba como parámetro el ID del experto y la fecha de las
solicitudes que queremos obtener y nos devuelva un JSON con el listado.
indicando el porcentaje de <strong>Ahorros aportados</strong> sobre el <strong>Precio de Compra</strong>
</p>


<h1>TODO</h1>
<ul>
    <li>Arquitectura de aplicación en Laravel</li>
    <li>Construir el modelo de datos en MYSQL con todas las entidades y relaciones</li>
    <li>Endpoint para persistir la solicitud en BD</li>
    <li>Endpoint para mostrar las solicitudes a gestionar por los expertos</li>
</ul>

<h1>Evaluable</h1>

<ul>
    <li>Diseño modelado de datos</li>
    <li>API REST con sus endpoints</li>
    <li>Arquitectura de aplicación en Laravel</li>
    <li>Utilización del ORM</li>
    <li>Uso de buenas prácticas</li>
    <li>Patrones de diseño utilizados</li>
    <li>Optimización del performance</li>
</ul>







