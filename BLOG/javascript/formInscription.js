<?php


?>



const pseudo = document.getElementById("pseudo");
const email = document.getElementById("email");
const password = document.getAnimations("password");

console.log(pseudo);

document.body.addEventListener("input", (e) => {
  pseudo = e.target.value;
  console.log(pseudo);
});
