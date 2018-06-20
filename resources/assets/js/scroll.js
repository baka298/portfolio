// let btn = document.querySelector('.envoi');
// let input = document.querySelector('.jsinput')

// console.log('etape 1')
// if (input.classList.contains('border-danger')) {
//     let input = document.querySelector('.jsinput');
//     console.log('etape 2')
//     setTimeout(function() {
//         document.querySelector('#divform').scrollIntoView()
//     }, 4000);
// }



let btn = document.querySelector("#form5")
let message = document.querySelector("#message")
let societe = document.querySelector("#societe")
let email = document.querySelector("#email")
let nom = document.querySelector("#nom")
let prenom = document.querySelector("#prenom")
let regtext = /^[A-Z][a-z]{1,15}$/
let regmessage = /.{10,500}$/
let regemail = /^[\w\W]+@\w{2,10}\.[a-z]{2,10}$/
let error = document.querySelector('.error')


console.dir(societe)
let check = function(event) {
    let x = 0
    if (regtext.test(nom.value)) {
        x++
        nom.classList.remove("border-danger")
        nom.classList.add("border", "border-success")
    } else {
        nom.classList.add("border", "border-danger")
    }


    if (regtext.test(prenom.value)) {
        x++
        prenom.classList.remove("border-danger")
        prenom.classList.add("border", "border-success")

    } else {
        prenom.classList.add("border", "border-danger")

    }

    if (regemail.test(email.value)) {
        x++
        email.classList.remove("border-danger")
        email.classList.add("border", "border-success")
    } else {
        email.classList.add("border", "border-danger")

    }

    if (regmessage.test(message.value)) {
        x++
        message.classList.remove("border-danger")
        message.classList.add("border", "border-success")
    } else {
        message.classList.add("border", "border-danger")

    }

    error.classList.add('hidden')
    if (x != 4) {

        error.classList.remove("hidden")
        event.preventDefault();
    }


}

btn.addEventListener("click", check)