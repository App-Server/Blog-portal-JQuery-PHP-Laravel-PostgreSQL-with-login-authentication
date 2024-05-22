document.getElementById('loginForm').addEventListener('submit',
    function(event) {
        var emailInput = document.getElementById('email');
        var passwordInput = document.getElementById('password');
        var isValid = true;

        // Validação do campo email
        if (emailInput.value.trim() === '') {
            emailInput.classList.add('is-invalid');
            isValid = false;
        } else {
            emailInput.classList.remove('is-invalid');
        }

        // Validação do campo senha
        if (passwordInput.value.trim() === '') {
            passwordInput.classList.add('is-invalid');
            isValid = false;
        } else {
            passwordInput.classList.remove('is-invalid');
        }

        // Impedir o envio do formulário se houver campos vazios
        if (!isValid) {
            event.preventDefault();
        }
    }
)

// document.getElementById('loginForm').addEventListener('submit',
//     function(event) {
//         var titleInput = document.getElementById('title');
//         var commentsInput = document.getElementById('comments');
//         var isValid = true;

//         // Validação do campo email
//         if (titleInput.value.trim() === '') {
//             titleInput.classList.add('is-invalid');
//             isValid = false;
//         } else {
//             titleInput.classList.remove('is-invalid');
//         }

//         // Validação do campo senha
//         if (commentsInput.value.trim() === '') {
//             commentsInput.classList.add('is-invalid');
//             isValid = false;
//         } else {
//             commentsInput.classList.remove('is-invalid');
//         }

//         // Impedir o envio do formulário se houver campos vazios
//         if (!isValid) {
//             event.preventDefault();
//         }
//     }
// )

