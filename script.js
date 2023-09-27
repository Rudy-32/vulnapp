function check() {
  const username = document.querySelector(".user");
  const password = document.querySelector(".pass");
  if (username.value === "kanye" && password.value === "kardashian") {
    alert(atob("U3Bhcmt7RFVNQl9XM0JfRDNWM0wwUDNSNX0="));
  } else {
    alert("this incident will be reported to spark tech team!!!");
  }
}
