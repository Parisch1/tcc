const btnLogin = document.querySelector(".btn-login");
const formLogin = document.querySelector(".formlogin");

btnLogin.addEventListener("click", event =>{
  event.preventDefault();

  const fields = [...document.querySelectorAll(".input-block input")];
  
  fields.forEach(field => { /* vai olhar cada campo se algum estiver vazio fala q o form está .validate-error */
    if(field.value === "")form.classList.add("validate-error");
  });
  const formError = document.querySelector(".validate-error");
  if(formError){
    formError.addEventListener("animationend", event =>{
      if(event.animationName === "nono"){
        formError.classList.remove("validate-error");
      }
    })
  }
  else{
  formLogin.classList.add("form-hide");/*cria uma classe nova */
}
});
formLogin.addEventListener("animationstart", event => {
  if(event.animationName === "down"){
    document.querySelector("body").style.overflow = "hidden";
  }
})

formLogin.addEventListener("animationend", event => { /*esconde o form quando a animação down termina*/
  if (event.animationName === "down" )
  formLogin.style.display = "none";
  document.querySelector("body").style.overflow = "none";
});