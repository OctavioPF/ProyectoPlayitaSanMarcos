function validarForm() {
    /* Agregar producto */
    if (form1.txt_Nombre.value == null || form1.txt_Nombre.value.length == 0
        || /^\s+$/.test(form1.txt_Nombre.value)) {
        alert('¡Hey! inserta El Nombre del Producto 👀');
        form1.txt_Nombre.focus();
        return false;
    }
    if (form1.lst_Categoria.selectedIndex == 0) {
        alert("Debe seleccionar una categoria.")
        form1.lst_Categoria.focus()
        return false;
    }

    if (form1.txt_Descripcion.value == null || form1.txt_Descripcion.value.length == 0
        || /^\s+$/.test(form1.txt_Descripcion.value)) {
        alert('¡Hey! inserta La descripcion 👀');
        form1.txt_Descripcion.focus();
        return false;
    }

    if (form1.txt_Precio.value == null || form1.txt_Precio.value.length == 0
        || /^[0-9]$/.test(form1.txt_Precio.value)) {
        alert('¡Hey! inserta El precio del Producto 👀');
        form1.txt_Precio.focus();
        return false;
    }

    if (form1.lst_Estado.selectedIndex==0){
        alert("Debe seleccionar un estado para el producto.")
        form1.lst_Estado.focus()
        return false;
    }

    return true;
}
function validarForm1() {
    /* Agregar producto */
    if (form1.txt_Nombre.value == null || form1.txt_Nombre.value.length == 0
        || /^\s+$/.test(form1.txt_Nombre.value)) {
        alert('¡Hey! inserta El Nombre del Producto 👀');
        form1.txt_Nombre.focus();
        return false;
    }

    if (form1.txt_Descripcion.value == null || form1.txt_Descripcion.value.length == 0
        || /^\s+$/.test(form1.txt_Descripcion.value)) {
        alert('¡Hey! inserta La descripcion 👀');
        form1.txt_Descripcion.focus();
        return false;
    }

    if (form1.txt_Precio.value == null || form1.txt_Precio.value.length == 0
        || /^[0-9]$/.test(form1.txt_Precio.value)) {
        alert('¡Hey! inserta El precio del Producto 👀');
        form1.txt_Precio.focus();
        return false;
    }


    return true;
}