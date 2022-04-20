function triggerClick() {
  document.querySelector("#profileImage").click();
}

profileImage.onchange = (evt) => {
  const [file] = profileImage.files;
  if (file) {
    profileDisplay.src = URL.createObjectURL(file);
  }
};



// document.querySelector(".close").addEventListener("click", function () {
//   document.querySelector(".bg-modal").style.display = "none";
// });
