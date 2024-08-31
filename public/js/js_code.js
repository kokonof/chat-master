
const show = document.querySelector(".navigation_2");
show.addEventListener("click",function (evt) {
  evt.preventDefault()
  const login = document.querySelector("[name=login]")
  const popup = document.querySelector(".modal-login")
  popup.classList.add("modal-show");
  login.focus();
  if (storage) {
    login.value = storage;
    password.focus();
  }else{
    login.focus();
  }
  console.log("Показати");
});








const close = document.querySelector(".modal-close");
close.addEventListener("click",function (evt) {
  evt.preventDefault()
  const popup = document.querySelector(".modal-login")
  popup.classList.remove("modal-show");
  popup.classList.remove("modal-error");
  console.log("Закрити");
});







const form = document.querySelector(".modal-login")
const login = document.querySelector("[name=login]");
const password = document.querySelector("[name=password]");
const popup = document.querySelector(".modal-login");

let isStorageSupport = true;
let storage = "";

try {
  storage = localStorage.getItem("login");
} catch (err) {
  isStorageSupport = false;
}
form.addEventListener("submit", function (evt) {
  evt.preventDefault();
  if (login.value && password.value) {
    if (isStorageSupport) {
      localStorage.removeItem("login");
    }
    console.log("увійти");
  } else {
    console.log("Ведіть пароль або логін");
    popup.classList.remove("modal-error");
    popup.offsetWidth = popup.offsetWidth;
    popup.classList.add("modal-error");
    if (isStorageSupport && login.value) {
      localStorage.setItem("login", login.value);
    }
  }
});
console.log(storage);





window.addEventListener("keydown", function (evt) {
  if ( evt.key === "Escape") { // Перевіряємо натискання клавіші Escape
    const modal = document.querySelector(".modal-show"); // Знаходимо модальне вікно
    if (modal) { // Перевіряємо, чи модальне вікно відкрите
      evt.preventDefault();
      modal.classList.remove("modal-show"); // Закриваємо модальне вікно
      popup.classList.remove("modal-error");
    }
  }
});
