document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registrationForm");
    const errorList = document.getElementById("errorList");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(form); // Create a FormData object from the form data
        const baseUrl = document
            .querySelector('meta[name="base-url"]')
            .getAttribute("content"); // Get base URL from meta tag

        fetch(`${baseUrl}/register`, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
                Accept: "application/json",
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json(); // Parse JSON response
            })
            .then((data) => {
                if (data.success) {
                    // Handle successful registration
                    alert("Cuenta creada exitosamente");

                    // Aquí puedes hacer algo con los datos del cliente si es necesario
                    console.log(data.customer);

                    form.reset(); // Clear the form
                } else {
                    // Handle errors
                    if (data.errors) {
                        displayErrors(data.errors); // Function to display errors on the page (see below)
                    } else {
                        alert("Error inesperado al procesar la solicitud.");
                    }
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("Hubo un problema al procesar su solicitud.");
            });
    });

    function displayErrors(errors) {
        errorList.innerHTML = ""; // Clear previous errors
        for (const [key, value] of Object.entries(errors)) {
            const errorItem = document.createElement("li");
            errorItem.textContent = value.join(", "); // Join error messages if they are in an array
            errorList.appendChild(errorItem);
        }
    }
});
