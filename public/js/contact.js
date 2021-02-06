const token = $('meta[name="csrf-token"]').attr('content')

const name = document.getElementById('name')
const phone = document.getElementById('phone')
const email = document.getElementById('email')
const message = document.getElementById('message')
const btn_submit = document.getElementById('btn-submit')
phone.addEventListener('keydown', (e) => {
    if (e.keyCode < 8 || (e.keyCode > 9 && e.keyCode < 48) || (e.keyCode > 57 && e.keyCode < 96) || e.keyCode > 105 ) e.preventDefault();
})
btn_submit.addEventListener('click', function () {
    store_contact()
})

const store_contact = () => {
    let data = {
        name: name.value,
        phone: phone.value,
        email: email.value,
        message: message.value,
    }
    console.log(data)

    fetch('/contacto-web', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        }
    })
        .then(res => res.json())
        .then(response => {
            if (response.status == 'success') {
                clear_form()
                ToastSuccess('Solicitud procesada correctamente')
            } else if (response.status == 'fail-validate') {
                eachErrors(response.errors)
            } else if (response.status == 'fail-send'){
                ToastError('La solicitud no fue procesada de forma correcta')
            }
        })
}

const clear_form= () => {
    name.value = ''
    email.value = ''
    phone.value = ''
    message.value = ''
}
