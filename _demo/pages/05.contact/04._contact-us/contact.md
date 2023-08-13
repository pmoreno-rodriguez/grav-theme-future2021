---
title: 'Contact with us'
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
            placeholder: Name
            validate:
                required: true
                message: 'The name is required'
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
                message: 'The email is required'
            type: email
            outerclasses: 'col-6 col-12-small'
            classes: null
        -
            name: subject
            label: false
            type: text
            placeholder: Subject
            validate:
                required: true
                message: 'The subject is required'
            outerclasses: 'col-12 col-12-small'
            classes: null
        -
            name: message
            label: false
            placeholder: Message
            validate:
                required: true
                message: 'The message is required'
            type: textarea
            outerclasses: 'col-12 col-12-small'
            classes: null
            rows: 10
        -
            name: privacy
            type: privacy
            label: 'Privacy policy'
            validate:
                required: true
                message: 'You must agree to the privacy policy'
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
            subject: '[Form from future.juanvillen.es] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Thanks for your comments !'
        display: /thankyou
        reset: true
---

<h3>Send us your comments</h3>