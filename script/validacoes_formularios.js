if (!erros) {
  const erros = [];
}

/*
 *******************************************
 ***         Campo de senha otp          ***
 *******************************************
 */
try {
  document.addEventListener("DOMContentLoaded", function (event) {
    function OTPInput() {
      const inputs = document.querySelectorAll(
        "#codigo-de-confirmacao > *[id]"
      );
      for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener("keydown", function (event) {
          if (event.key === "Backspace") {
            inputs[i].value = "";
            if (i !== 0) inputs[i - 1].focus();
          } else {
            if (i === inputs.length - 1 && inputs[i].value !== "") {
              return true;
            } else if (event.keyCode > 47 && event.keyCode < 58) {
              inputs[i].value = event.key;
              if (i !== inputs.length - 1) inputs[i + 1].focus();
              event.preventDefault();
            } else if (event.keyCode > 64 && event.keyCode < 91) {
              inputs[i].value = String.fromCharCode(event.keyCode);
              if (i !== inputs.length - 1) inputs[i + 1].focus();
              event.preventDefault();
            }
          }
        });
      }
    }
    OTPInput();
  });
} catch (error) {
  erros.push(error);
}

/*
 ***********************************************
 ***         Validação do formulário         ***
 ***********************************************
 */
    const pass = document.querySelector('#password')
    const confPass = document.querySelector('#confirmar-password')

try {
  (function () {
    "use strict";
    window.addEventListener(
      "load",
      function () {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName("needs-validation");
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener(
            "submit",
            function (event) {
                const pass = document.querySelector('#password')
    const confPass = document.querySelector('#confirmar-password')
    if (confPass.value != pass.value) {
        confPass.classList.add('is-invalid')
    }
              
              if (form.checkValidity() === false || pass.value != confPass.value || document.querySelector('.is-invalid')) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add("was-validated");
            },
            false
          );
        });
      },
      false
    );
  })();
} catch (error) {
  erros.push(error);
}
