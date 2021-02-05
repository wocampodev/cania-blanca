
// Alerta de errores
const eachErrors = (errors) =>  {
    let html = '';
    for (const [key, value] of Object.entries(errors)) {
        html += value[0]+'<br>';
    }
    showErrorsAlert(html);
}

const showErrorsAlert = (content) => {
    Swal.fire({
        position: 'center',
        icon: 'error',
        html: content,
        showConfirmButton: false,
        timer: 5000
    });
}

const Toast = Swal.mixin({
    toast: true,
    position: 'center',
    showConfirmButton: false,
    timer: 1500,
});

const ToastError = (message)=> {
    toastr.error(message)
}

const ToastSuccess = (message)=> {
    toastr.success(message)
}

const ToastInfo = (message)=> {
    toastr.info(message)
}
