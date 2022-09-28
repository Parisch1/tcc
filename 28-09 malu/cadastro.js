const btnCadastro = document.querySelector(".btn-cadastro");
const formCadastro = document.querySelector(".formcadastro");

btnCadastro.addEventListener("click", event =>{
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
  formCadastro.classList.add("form-hide");/*cria uma classe nova */
}
});
formCadastro.addEventListener("animationstart", event => {
  if(event.animationName === "down"){
    document.querySelector("body").style.overflow = "hidden";
  }
})

formCadastro.addEventListener("animationend", event => { /*esconde o form quando a animação down termina*/
  if (event.animationName === "down" )
  formCadastro.style.display = "none";
  document.querySelector("body").style.overflow = "none";
});