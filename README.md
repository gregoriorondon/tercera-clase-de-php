# Creador de PDF con HTML5 y PHP

En la universidad donde actualmente estudio, nos mandaron como tarea, crear un método para hacer un formulario que al dar enviar salga como un PDF. En mi caso me resultó mas facil realizarlo con la librería llamada [DOMPDF](https://github.com/dompdf/dompdf) puesto que otras librerías a pesar que tenían mas opciones, DOMPDF es mas fácil de usar y mas minimalista en su forma de trabajar.

En esta actividad usé la librería con la extensión de [Composer](https://getcomposer.org/) para poderlo hacer un tanto mas fácil para mí y que funcione lo mas perfecto posible.

En este repositorio encontraras la librería ya incluida por si en algún futuro la librería cambia su forma de trabajar y éste proyecto no tenga compatibilidad con las futuras versiones por las configuraciones que he puesto. Pero si quieres ir a su sitios oficiales, puedes hacerlo por los siguientes links o URL:

Composer :point_right: [https://getcomposer.org/](https://getcomposer.org/)

DOMPDF :point_right: [https://github.com/dompdf/dompdf](https://github.com/dompdf/dompdf)

Por si eres nuevo en la programación web, el archivo *index.html* es el archivo de inicio, en este proyecto allí encontraras las entradas de los datos que quieras insertar en el PDF. El archivo *prueba.html* estará la plantilla que contiene los espacios en blanco para la información ingresada en el archivo index.html. Y finalmente, el archivo *pdf.php* es donde se produce la conversión de HTML y PHP a PDF, allí están todas las variables (códigos) que hacen que la librería haga su trabajo, pero si quieres modificar como se vería o que funciones extras quieres colocar para mejorar este proyecto para que se adapte al tuyo, lo puedes hacer con las instrucciones que están en el repositorio de [DOMPDF](https://github.com/dompdf/dompdf).

Espero que éste proyecto te sea de gran ayuda para algún proyecto que tengas. 
