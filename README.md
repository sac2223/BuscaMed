README – Proyecto BuscaMed

Página principal ("index.html"): Presenta BuscaMed y permite acceder al inicio de sesión, al registro de farmacias y al contacto. También contiene un buscador de medicamentos. En un entorno real, las búsquedas serían enviadas al Backend, que consultaría la Base de Datos para mostrar los resultados correspondientes.

Inicio de sesión ("inicio.html"): Captura el correo electrónico y la contraseña de la farmacia. En un entorno real, estos datos serían enviados al Backend para validar las credenciales y verificar en la Base de Datos si la farmacia está aprobada. Solo las farmacias aprobadas podrían ingresar al panel administrativo.

Registro de farmacia ("registro.html"): Captura el nombre de la farmacia, NIT, dirección, ciudad, responsable, correo electrónico, teléfono y contraseña. En un entorno real, el Backend validaría estos datos y los almacenaría en la Base de Datos como una solicitud pendiente de aprobación.

Recuperación de contraseña ("contrasena.html"): Captura el correo electrónico de la cuenta que necesita recuperar su contraseña. En un entorno real, el Backend verificaría el correo y gestionaría el envío de un enlace o código de recuperación. Actualmente, la pantalla solo muestra una alerta.

Panel de farmacia ("farmacia.html"): Presenta las opciones para administrar medicamentos, existencias, precios, alertas, información de la farmacia, estadísticas y productos destacados. En un entorno real, el Backend consultaría la Base de Datos para mostrar la información de la farmacia autenticada.

Agregar medicamento ("agregar-medicamento.html"): Captura los datos del medicamento, como nombre comercial, nombre genérico, marca, categoría, presentación, dosis, precio y cantidad. En un entorno real, el Backend validaría y almacenaría estos datos en el inventario de la farmacia.

Actualizar stock ("actualizar-stock.html"): Permite consultar los medicamentos y sus cantidades disponibles. En un entorno real, las modificaciones serían enviadas al Backend para actualizar las existencias en la Base de Datos.

Actualizar precios ("actualizar-precios.html"): Permite consultar los precios actuales e ingresar nuevos valores. En un entorno real, el Backend validaría los precios y actualizaría los registros correspondientes en la Base de Datos.

Alertas ("alertas.html"): Muestra los medicamentos con pocas existencias o agotados. En un entorno real, el Backend consultaría el inventario y generaría las alertas según las cantidades registradas.

Información de farmacia ("informacion-farmacia.html"): Permite consultar y modificar la dirección, teléfono, correo electrónico y horarios de atención. En un entorno real, los cambios serían enviados al Backend para actualizar la información en la Base de Datos.

Estadísticas ("estadisticas.html"): Presenta el total de medicamentos, los disponibles, los que tienen stock bajo y los agotados. En un entorno real, el Backend consultaría la Base de Datos y calcularía estos indicadores.

Destacar producto ("destacar-producto.html"): Permite seleccionar un medicamento para darle mayor visibilidad en BuscaMed. En un entorno real, el Backend guardaría la selección en la Base de Datos para mostrar el producto destacado en la plataforma.
