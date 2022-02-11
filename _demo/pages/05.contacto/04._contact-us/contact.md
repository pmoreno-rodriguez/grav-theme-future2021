---
title: 'Contacta con nosotros'
routable: false
cache_enable: false
form:
    name: contact-form
    template: form-messages
    action: /
    classes: 'row gtr-uniform'
    refresh_prevention: true
    fields:
        -
            name: name
            label: false
            placeholder: Nombre
            validate:
                required: true
                message: 'El nombre es obligatorio'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: 'col-6 col-12-small'
            classes: null
        -
            name: email
            label: false
            placeholder: Email
            validate:
                required: true
                message: 'El Email es obligatorio'
            type: email
            outerclasses: 'col-6 col-12-small'
            classes: null
        -
            name: subject
            label: false
            type: text
            placeholder: Asunto
            validate:
                required: true
                message: 'El asunto es obligatorio'
            outerclasses: 'col-12 col-12-small'
            classes: null
        -
            name: message
            label: false
            placeholder: Mensaje
            validate:
                required: true
                message: 'El mensaje es obligatorio'
            type: textarea
            outerclasses: 'col-12 col-12-small'
            classes: null
            rows: 10
        -
            name: privacy
            type: privacy
            label: 'Política de Privacidad'
            validate:
                required: true
                message: 'Al usar este formulario estás de acuerdo con nuestra política de privacidad'
    buttons:
        -
            type: submit
            value: Enviar
            outerclasses: form-field
            classes: 'button primary'
    process:
        save:
            fileprefix: contact-
            dateformat: dmY-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Formulario desde ES-GRAV.COM] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Gracias por su comentario !'
        display: /thankyou
        reset: true
---

<h3>Envíenos sus comentarios</h3>