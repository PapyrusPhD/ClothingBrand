// logout-confirmation.js

function addLogoutConfirmation(buttonId, confirmationTitle, confirmationText) {
  const logoutButton = document.getElementById(buttonId);

  logoutButton.addEventListener("click", function (event) {
    event.preventDefault();

    Swal.fire({
      title: confirmationTitle,
      text: confirmationText,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#1b2529",
      cancelButtonColor: "#1b2529",
      confirmButtonText: "Log-Out",
      cancelButtonText: "Cancel",
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user clicks "Log-Out," redirect to the logout page.
        window.location.href = "logout.php";
      }
    });
  }
}

// Call the function to set up the confirmation for the logout button
document.addEventListener("DOMContentLoaded", function () {
  addLogoutConfirmation("logoutButton", "Are you sure you want to log out?", "You will be logged out of your account.");
});
