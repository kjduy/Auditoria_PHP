Ingreso al sistema: dalopez18-password123

Distribucion de carpetas
includes: Archivos que guardan lo que mas se usa de las paginas, codigo reusable

js: Scripts
    - components : Scripts que facilitan ciertas cosas
        * dataTables.js : Archivo que modifica el idioma y botones de las tablas usadas

Preguntar 
    - Edad en pacientes (OJO)


-----------------------------------------------------------------------------------------------------

/*Notas de Deivid*/
Fecha: 30-03-2021    Hora: 18:24
- Creo archivos "test.js"  y "test.php" para probar funciones y sql, recordar eliminarlos en version final
- NO cambiar IDs de elementos dentro de Formas, de los archivos views/doctor.php y views/user.php 
- Actualizar base de Datos, incluidas tablas doctors, availability_days y   availability_hours
- No usar nunca ":" para id's de HTML, usar "_" para prevenir errores de identificacion de elemntos en jQuery
- Para ejecutar varias sentencias SQL, usar el metodo  "c_get_queries" incluido en la clase "Db_commands"

Fecha: 02-04-2021    Hora: 18:46
- El search de las citas, debe ser solo para numeros de cedula 
- Validar que el nombre del paciente este lleno antes de hacer una reservacion
- En reservacion de citas cambiar los iconos
- En reservacion de citas, el registro debe desaparecer luego de confirmar o cancelar (arreglado)
- Validar que el no se pueda repetir el nombre de usuario (arreglado)

Fecha: 03-04-2021    Hora: 17:06
- Arreglar botones de cita medica 
- De verdad deberia dejar que se elimine una cita medica 

Fecha: 04-04-2021    Hora: 17:05
- Modificar los botones de volver para el acceder a la cita medica desde el historial del paciente 