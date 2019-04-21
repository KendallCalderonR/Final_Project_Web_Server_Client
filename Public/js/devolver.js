function Devolver(id_prestamo, id_libro) {
    document.form_devolver.id_libro.value = id_libro;
    document.form_devolver.id_prestamo.value = id_prestamo;
    document.form_devolver.submit();
}