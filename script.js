const btn = document.getElementById('button-enviar');

btn.addEventListener('click', function handleClick(event) {

    // 👇️ if you are submitting a form (prevents page reload)
    event.preventDefault();

    const fileInput = document.getElementById('file-filme');
    const linkInput = document.getElementById('link-filme');

    // Send value to server
    /* console.log('fileInput:', fileInput.value);
    console.log('linkInput:', linkInput.value);*/

    if (fileInput.value.length !== 0 && linkInput.value.length !== 0) {
        // 👇️ clear input field
        fileInput.value = '';
        // 👇️ change id name to poster to work with php
        linkInput.id = 'poster';
        document.getElementById("formulario").submit();
    } else if (fileInput.value.length !== 0 && linkInput.value.length == 0) {
        fileInput.id = 'poster';
        document.getElementById("formulario").submit();
    }
});