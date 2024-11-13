const btnSignIn =document.getElementById('sign-in'),
      btnSignUp =document.getElementById('sign-up'),
      formRegister = document.querySelector(".register"),
      fromLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e =>{
    formRegister.classList.add("hide");
    fromLogin.classList.remove("hide");
})

btnSignUp.addEventListener("click", e =>{
    fromLogin.classList.add("hide");
    formRegister.classList.remove("hide");
})
