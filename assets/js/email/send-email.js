// Global functions
import { scrollToElement } from '../global/global.js';

window.addEventListener("load", function () {

    const contactForm = document.getElementById('contact-form');
    const messageContainer = contactForm?.querySelector('#submit-message');
    const submitButton = contactForm?.querySelector("button[type='submit']");
    const spinner = submitButton?.querySelector(".spinner");

    /**
     * Event listener for the form submission.
     * Prevents default form submission and sends form data via Fetch API.
     * Displays success or error messages and disables submit button on success.
     * Scrolls viewport to the message container after response.
     * 
     * @param {Event} e - The submit event object
     */
    contactForm.addEventListener('submit', function (e) {

        e.preventDefault(); // Prevent default form submission (page reload)
        submitButton.setAttribute("disabled", true);
        spinner.classList.add("show");

        const form = e.target;
        const formData = new FormData(form);

        fetch('email/send-email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {

            submitButton.removeAttribute("disabled");

            let parsedResponse = JSON.parse(response);
            // if(!text) return;
            console.log(parsedResponse)

            parsedResponse.status == "fail" ? handleFail(parsedResponse) : handleSuccess(parsedResponse);
            return parsedResponse;

        })
        .catch(error => {
            console.log(error);
            // let parsedResponse = JSON.parse(error);
            // handleFail(parsedResponse);

        })
        .finally(() => {
            spinner.classList.remove("show");
        });

    });


    const handleSuccess = (response) => {

        messageContainer.innerHTML = response.msg;
        messageContainer.classList.add("success");
        messageContainer.classList.remove("error");
        scrollToElement(messageContainer);

    }


    const handleFail = (response) => {

        messageContainer.innerText = response.msg;
        messageContainer.classList.add("error");
        messageContainer.classList.remove("success");
        scrollToElement(messageContainer);
        submitButton.removeAttribute("disabled");

    }

});