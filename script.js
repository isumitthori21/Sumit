document.addEventListener("DOMContentLoaded", () => {
    const loginBtn = document.getElementById("login-btn");
    const modal = document.getElementById("login-modal");
    const closeModal = document.getElementById("close-modal");

    // Open login modal
    if (loginBtn) {
        loginBtn.addEventListener("click", () => {
            modal.classList.remove("hidden");  // Show the modal
        });
    }

    // Close login modal
    if (closeModal) {
        closeModal.addEventListener("click", () => {
            modal.classList.add("hidden");  // Hide the modal
        });
    }

    // Prevent form submission and handle login in JS for testing
    if (document.getElementById("login-form")) {
        document.getElementById("login-form").addEventListener("submit", (e) => {
            e.preventDefault();  // Prevent actual form submission for testing
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            alert(`Welcome, ${username}!`);
            modal.classList.add("hidden");  // Hide modal after login attempt
        });
    }
});
