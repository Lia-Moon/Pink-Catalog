const btn = document.getElementById('button-enviar');

btn.addEventListener('click', function handleClick(event) {

    // 👇️ if you are submitting a form (prevents page reload)
    event.preventDefault();

    const fileInput = document.getElementById('file-filme');
    const linkInput = document.getElementById('link-filme');
    const form = document.getElementById('formulario');

    // Send value to server
    /* console.log('fileInput:', fileInput.value);
    console.log('linkInput:', linkInput.value);*/

    if (fileInput.value.length !== 0 && linkInput.value.length !== 0) {
        // 👇️ clear input field
        //fileInput.value = '';
        // 👇️ change name to poster to work with php
        linkInput.name = 'poster';
        fileInput.removeAttribute('name');
        form.submit();
    } else if (fileInput.files.length > 0) {
        fileInput.name = 'poster';
        form.submit();
    } else if (linkInput.value.length > 0) {
        linkInput.name = 'poster';
        form.submit();
    } else {
        alert('Por favor, selecione um arquivo ou insira um link para o pôster do filme.');
    }
});