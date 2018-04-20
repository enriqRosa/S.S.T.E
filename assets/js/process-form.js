    const mv = new Vue({
        el: '#vue-main-form',
        data: {
            formType: true,
            message: {
                name: '',
                lastaName: '',
                email: '',
                password: '',
                serverResponse: ''
            },
            formats: {
                name: '',
                email: ''
            },
            serverResponse: false
        },
        computed: {
            formTitle() {
                return (this.formType)
                    ? 'Crear cuenta'
                    : 'Iniciar sesión'
            }
        }
    })