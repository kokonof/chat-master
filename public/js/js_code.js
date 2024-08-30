const show = document.querySelector(".navigation_2");
show.addEventListener("click",function (evt) {
  evt.preventDefault()
  const popup = document.querySelector(".modal-login")
  popup.classList.add("modal-show");
  console.log("Показати");
});

const close = document.querySelector(".modal-close");

close.addEventListener("click",function (evt) {
  evt.preventDefault()
  const popup = document.querySelector(".modal-login")
  popup.classList.remove("modal-show");
  console.log("Закрити");
});

const loginSend = document.querySelector(".login-send");
loginSend.addEventListener("click",function (evt) {
  evt.preventDefault()
  console.log("Відправити на бекенд а");
});




