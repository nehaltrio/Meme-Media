function triggerClick() {
  document.querySelector("#profileImage").click();
}


profileImage.onchange = (evt) => {
  const [file] = profileImage.files;
  if (file) {
    profileDisplay.src = URL.createObjectURL(file);
  }
};

// registration
document.getElementById("button").addEventListener("click", function () {
  document.querySelector(".bg-modal").style.display = "flex";
});

document.querySelector(".close").addEventListener("click", function () {
  document.querySelector(".bg-modal").style.display = "none";
});

// login
document.getElementById("btn_login").addEventListener("click", function () {
  document.querySelector(".bg-login").style.display = "flex";
});




